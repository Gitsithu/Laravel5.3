<?php

namespace laravel_5_3\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use laravel_5_3\Coursetype;

class CoursetypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $objs = DB::select('select * from course_type');
        return view('course_type.index')
            ->with('objs', $objs);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('course_type.create');
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
        $this->validate($request, [
            
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $status = $request->input('status');
        $remark = $request->input('remark');
        $created_at = date("Y-m-d H:i:s");

        try{
            
            // if($files = $request->file('image')){
            //     $image = $files->getClientOriginalName();
                
            // }
            // else{
            //     $image = "";
            // }

            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $image_file = "/images/" . $new_name;
           
            $new_obj = new Coursetype();
        
            $new_obj->image = $image_file;
            $new_obj->remark = $remark;
            $new_obj->status = $status;
            $new_obj->created_at = $created_at;
            $new_obj->save();
        
                $message = 'Success, car type created successfully ...!';
                $request->session()->flash('success', $message);
    
                // return redirect()->route('backend/car_type');
                // return redirect()->action(
                //     'UserController@profile', ['id' => 1]
                    // );
    
                return redirect()->action(
                    'CoursetypeController@index'
                );
            
            
    
        }
        catch(Exception $e){
            
            $smessage = 'Fail, Error in car creating ...!';
            $request->session()->flash('fail', $smessage);

            return redirect()->action(
                'CoursetypeController@index'
            );
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
        //
        $obj = DB::table('course_type')->where('id', $id)->first();
        return view('course_type.edit', ['obj' => $obj]);
    
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
        $this->validate($request, [
        
            'status' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $status = $request->input('status');
        $remark = $request->input('remark');
        $updated_at = date("Y-m-d H:i:s");

        try{
            
            // if($files = $request->file('image')){
            //     $image = $files->getClientOriginalName();
                
            // }
            // else{
            //     $image = "";
            // }

            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $new_name);
            $image_file = "/images/" . $new_name;
           
            $new_obj = Coursetype::find($id);
        
            $new_obj->image = $image_file;
            $new_obj->remark = $remark;
            $new_obj->status = $status;
            $new_obj->updated_at = $updated_at;
            $new_obj->save();
        
                $message = 'Success, course type created successfully ...!';
                $request->session()->flash('success', $message);
    
                // return redirect()->route('backend/car_type');
                // return redirect()->action(
                //     'UserController@profile', ['id' => 1]
                    // );
    
                return redirect()->action(
                    'CoursetypeController@index'
                );
            
            
    
        }
        catch(Exception $e){
            
            $smessage = 'Fail, Error in car creating ...!';
            $request->session()->flash('fail', $smessage);

            return redirect()->action(
                'CoursetypeController@index'
            );
        }

      
      
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //
        $status = 0;
        $updated_at = date("Y-m-d H:i:s");
        DB::update('update course_type set status = ?, updated_at = ? where id = ?', [$status, $updated_at, $id]);

        $message = 'Success, course_type deleted successfully ...!';
        $request->session()->flash('success', $message);

        return redirect()->route('course_type');
    }
    }

