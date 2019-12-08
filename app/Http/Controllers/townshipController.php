<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class townshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $township = DB::select('select * from township');
        return view('township.index')
        
            ->with('township', $township);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('township.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
            $name = $request->input('name');
            $description = $request->input('description');
            $status = $request->input('status');
            $created_at = date("Y-m-d H:i:s");
    
            
            DB::insert('insert into township (name,description,status,created_at) values(?,?,?,?)',[$name, $description, $status,$created_at]);

            $successmessage = 'Success, township created successfully ...!';
            $request->session()->flash('success', $successmessage);
    
            return redirect()->route('township');
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
        //
        $township = DB::select('select * from township where id = ?',[$id]);
        // $tempCourses = $courses[0];
        return view('township.edit',['township'=>$township]);
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
        //

        $name = $request->input('name');
        $description= $request->input('description');
        $status = $request->input('status');
        $updated_at = date("Y-m-d H:i:s");

        DB::update('update township set name = ?, description = ?, status = ?, updated_at = ? where id = ?',[$name,$description,$status,$updated_at,$id]);

        $successmessage = 'Success, course updated successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('township');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $status = 0;
        $updated_at = date("Y-m-d H:i:s");
        DB::update('update township set status = ?, updated_at = ? where id = ?',[$status,$updated_at,$id]);

        $successmessage = 'Success, township deleted successfully ...!';
        $request->session()->flash('fail', $successmessage);

        return redirect()->route('township');
    }
}
