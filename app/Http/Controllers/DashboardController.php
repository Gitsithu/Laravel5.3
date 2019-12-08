<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            
        // Start - Searching Course Count Process
            $course_count_raw = DB::select('select count(id) AS course_count from course where status = 1');

            if (isset($course_count_raw) && count($course_count_raw)>0) {
                $course_count = $course_count_raw[0]->course_count;
            } else {
                $course_count = 0;
            }
            // End - Searching Course Count Process

            // Start - Searching User Count except Adimin (Role 2) Process
            $user_count_raw = DB::select('select count(id) AS user_count from users where role_id = 1');

            if (isset($user_count_raw) && count($user_count_raw)>0) {
                $user_count = $user_count_raw[0]->user_count;
            } else {
                $user_count = 0;
            }
            // End - Searching User Count except Adimin (Role 2) Process

            // Start - Searching Course Registration Process
            $registration_count_raw = DB::select('select count(id) AS registration_count from registration where status = 1');

            if (isset($registration_count_raw) && count($registration_count_raw)>0) {
                $registration_count = $registration_count_raw[0]->registration_count;
            } else {
                $registration_count = 0;
            }
            // End - Searching Course Registration Process

            return view('dashboard')
            ->with('course_count', $course_count)
            ->with('user_count', $user_count)
            ->with('registration_count', $registration_count);
        }
        else{
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
