<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loginUser = Auth::user();

        if ($loginUser->role_id == 1) {
            $status = 1;
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id');
        }
        else{
            $loginUserId = $loginUser->id;
            $status = 1;
            $registrations = DB::select('SELECT r.*,u.name AS user_name,c.name AS course_name 
                                FROM 
                                registration AS r 
                                JOIN users AS u
                                ON r.user_id = u.id
                                JOIN course AS c
                                ON r.course_id = c.id
                                WHERE r.status = ' .$status . ' AND r.user_id = '. $loginUserId);
        }
        
        return view('registration.index')
            ->with('registrations', $registrations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::select('select * from course');
        $user=DB::select('select * from users where role_id="2"');
        return view('registration.create')
            ->with('courses', $courses)
            ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Getting login ( Auth User Object )
        $loginUser = Auth::user();

        // Checking already login or not
        //if(count(array($loginUser))>0){
        if(!empty($loginUser)) {

            $courses = DB::select('select * from course');

            $course_id = $request->input('course_id');
            $user_id = $loginUser->id;

            // Checking already registered this course or not
            $registeredFlag = DB::select('select * from registration where user_id = ?  AND course_id = ?' ,[$user_id,$course_id] );
            
            if(!empty($registeredFlag)) {
            //if (count(array($registeredFlag))>0) {
                
                $successmessage = 'Error, You already registered to this course !';
                $request->session()->flash('success', $successmessage);

                return redirect()->route('registration/create')
                ->with('courses', $courses);
            }
            else{

                // Getting Course detail information to insert course fee as history
                $course = DB::select('select * from course where id = ' . $course_id);
                $fee = $course[0]->fee;
                $created_at = date("Y-m-d H:i:s");

                DB::insert('insert into registration (course_id,user_id,fee,created_at) values(?,?,?,?)',[$course_id,$user_id, $fee, $created_at]);

                $successmessage = "Success, registration successfully !";
                $request->session()->flash('success', $successmessage);

                return redirect()->route('registration/create')
                ->with('courses', $courses);
            } 

        }
        else{
            $successmessage = "Error, your session time out and please login again ! ";
            $request->session()->flash('success', $successmessage);
    
            return route('registration.create')
            ->with('courses', $courses);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrations = DB::select('SELECT r.* ,u.name as user_name, c.name AS course_name
                            FROM registration AS r
                            JOIN users AS u
                            ON r.user_id = u.id 
                            JOIN course AS c
                            ON r.course_id = c.id
                            WHERE r.id =  ? ',[$id]);

        $courses = DB::select('select * from course');

        return view('registration.edit')
            ->with('registrations', $registrations)
            ->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
             
        $course_id = $request->input('course_id');        
        $course = DB::select('select * from course where id = ' . $course_id);
        $fee = $course[0]->fee;
        $updated_at = date("Y-m-d H:i:s");

        DB::update('update registration set course_id = ?, fee = ?, updated_at = ? where id = ?',[$course_id,$fee,$updated_at,$id]);

        $successmessage = "Success, course registration updated successfully ! ";
        $request->session()->flash('success', $successmessage);

        return redirect()->route('registration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {        
        $status = 0;
        $updated_at = date("Y-m-d H:i:s");
        DB::update('update registration set status = ?, updated_at = ? where id = ?',[$status,$updated_at,$id]);

        $successmessage = 'Success, registration deleted successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('registration');

    }
}
