<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objs = DB::select('select * from users');
        return view('user.index')
            ->with('objs', $objs);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        'email'=>'required|email|max:255|unique:users',
        'status'=>'required',
        'password'=>'required|min:6',
        ]);

        // return Validator::make($request, [
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('status');
        $created_at = date("Y-m-d H:i:s");
        $password = bcrypt($request->input('password'));

        DB::insert('insert into users (name,email,password,status,created_at) values(?,?,?,?,?)',[$name, $email,$password, $status,$created_at]);
        
        $successmessage = 'Success, user created successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('user');
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
        $user = DB::select('select * from users where id = ?',[$id]);
        
        // General knowledge about the data retrieve and SQL Injection Case
        // the only difference here is the syntax. Yes, a DB::select doesn't protect against SQL injection. 
        // But SQL injection is only a risk when you pass in user input. 
        // For example this is vulnerable to SQL injection:
        // DB::select('SELECT * FROM users WHERE name = "'.Input::get('name').'"');
        // But Whereas this is not with DB::table case:
        // DB::table('users')->where('name', Input::get('name'))->get();
        // But also this isn't: (Using bindings "manually")
        // DB::select('SELECT * FROM users WHERE name = ?', array(Input::get('name')));
        
        //$user = DB::table('users')->where('id', $id)->get();
        // get() method will return as array with many sub child and you need to call as $user[0]
        $user = DB::table('users')->where('id', $id)->first();
        
        return view('user.edit',['obj'=>$user]);
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
            'email' => 'required|email|unique:users,email,'. $id .'',
            'status'=>'required'
            ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $status = $request->input('status');
        $updated_at = date("Y-m-d H:i:s");

        DB::update('update users set name = ?, email = ?, status = ?, updated_at = ? where id = ?',[$name,$email,$status,$updated_at,$id]);
        $successmessage = 'Success, user updated successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('user');
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
        DB::update('update users set status = ?, updated_at = ? where id = ?',[$status,$updated_at,$id]);

        $successmessage = 'Success, user deleted successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('user');
    }
}

