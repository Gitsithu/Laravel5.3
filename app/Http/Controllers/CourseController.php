<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::select('select * from course');
        return view('course.index')
        
            ->with('courses', $courses);
        // die("test");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'name'=>'required',
        'fee'=>'required|integer|max:2147483647',
        'status'=>'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $name = $request->input('name');
        $fee = $request->input('fee');
        $status = $request->input('status');
        $created_at = date("Y-m-d H:i:s");

        $level = $request->input('level');

        $require_entry_test_raw = $request->input('require_entry_test');
        if($require_entry_test_raw == null){
            $require_entry_test = 0; 
        }
        else{
            $require_entry_test = 1;
        }

        $require_basic_html_raw = $request->input('require_basic_html');
        if($require_basic_html_raw == null){
            $require_basic_html = 0; 
        }
        else{
            $require_basic_html = 1;
        }
        
        $require_css_html_raw = $request->input('require_css_html');
        if($require_css_html_raw == null){
            $require_css_html = 0; 
        }
        else{
            $require_css_html = 1;
        }
                
        $require_javascript_html_raw = $request->input('require_javascript_html');
        if($require_javascript_html_raw == null){
            $require_javascript_html = 0; 
        }
        else{
            $require_javascript_html = 1;
        }
             
            // if($files = $request->file('image')){
            //     $image = $files->getClientOriginalName();
                
            // }
            // else{
            //     $image = "";
            // }
            try{
            
        
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $image_file = "/images/" . $new_name;
            DB::insert('insert into course (name,fee,status,created_at,level,require_entry_test,require_basic_html,require_css_html,require_javascript_html,image) values(?,?,?,?,?,?,?,?,?,?)',[$name, $fee, $status,$created_at,$level,$require_entry_test,$require_basic_html,$require_css_html,$require_javascript_html,$image_file]);

            $successmessage = 'Success, car course successfully ...!';
            $request->session()->flash('success', $successmessage);

             // return redirect()->route('backend/car');
            // return redirect()->action(
            //     'UserController@profile', ['id' => 1]
            // );

            return redirect()->route('course');
        }
        catch(Exception $e){
            
            $successmessage = 'Fail, Error in course creating ...!';
            $request->session()->flash('fail', $successmessage);
            return redirect()->route('course');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = DB::select('select * from course where id = ?',[$id]);
        // $tempCourses = $courses[0];
        return view('course.edit',['courses'=>$courses]);
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

        $this->validate($request,[
        'name'=>'required',
        'fee'=>'required|integer|max:2147483647',
        'status'=>'required'
        
        ]);

        $name = $request->input('name');
        $fee = $request->input('fee');
        $status = $request->input('status');
        $updated_at = date("Y-m-d H:i:s");
        try{
            
            
            if($files = $request->file('image')){
                $image = $request->file('image');
                $new_name = rand() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $new_name);
                $image_file = "/images/" . $new_name;
    
                DB::update('update course set name = ?, fee = ?, status = ?, updated_at = ?, image = ? where id = ?',[$name,$fee,$status,$updated_at,$image_file,$id]);
            }
            else{
                DB::update('update course set name = ?, fee = ?, status = ?, updated_at = ? where id = ?',[$name,$fee,$status,$updated_at,$$id]);
            }
           
            $successmessage = 'Success, course updated successfully ...!';
            $request->session()->flash('success', $successmessage);

            // return redirect()->route('backend/car');
            // return redirect()->action(
            //     'UserController@profile', ['id' => 1]
            // );

            return redirect()->route('course');
        }
        catch(Exception $e){
            
            $successmessage = 'Fail, Error in course updating ...!';
            $request->session()->flash('fail', $successessage);

            return redirect()->route('course');
        }


       

        
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
        DB::update('update course set status = ?, updated_at = ? where id = ?',[$status,$updated_at,$id]);

        $successmessage = 'Success, course deleted successfully ...!';
        $request->session()->flash('fail', $successmessage);

        return redirect()->route('course');
    }
}
