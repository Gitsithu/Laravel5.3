<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from student');
        //return view('student.index',['users'=>$users]);
        return view('student.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        DB::insert('insert into student (name,address) values(?,?)',[$name,$address]);
        //echo "Record inserted successfully.<br/>";
        //echo '<a href="/student/create">Click Here</a> to go back.';
        return redirect()->route('student');
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
        $users = DB::select('select * from student where id = ?',[$id]);
return view('student.edit',['users'=>$users]);
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
        $name = $request->input('stud_name');
        $address = $request->input('address');
        DB::update('update student set name = ?, address = ? where id = ?',[$name,$address,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href="/student">Click Here</a> to go back.';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('delete from student where id = ?',[$id]);
echo "Record deleted successfully.<br/>";
echo '<a href="/student">Click Here</a> to go back.';

    }
}
