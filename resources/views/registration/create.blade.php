@extends('layouts.master')
@section('title','Course Registration - New')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Course Registration > Create</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Course Registration Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row"><!-- div class=row one start -->
            @if (session('success'))
                <div class="flash-message col-md-12">
                <div class="alert alert-success ">
                    {{session('success')}}
                </div>
                </div>
            @endif
        </div>
    </div>
</div>

@if (count($errors) > 0)
<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->
    
            <div class="card-body">  <!-- card-body start -->

                
                    <div class="row"><!-- div class=row One start -->
                        @foreach ($errors->all() as $error)
                            <div class="col-md-12"><!-- div class=col 12 One start -->
                                <p class="text-danger">* {{ $error }}</p> 
                            </div><!-- div class=col 12 One end -->
                        @endforeach
                    </div><!-- div class=row One end -->
                

            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->
@endif

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Course Registration Create</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

				<form action="/backend/registration/store" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-3">
                        Course Name<br>
                        <select class="form-control" name="course_id" id="course_id">
							<!-- <option value="" selected disabled>Select Course Name</option> -->
                            {{-- dynamic looping--}} 
							@foreach($courses as $course)
								<option value="{{$course->id}}">{{$course->name}} -> {{$course->fee}} - KS<option>
							@endforeach
						</select>
                        <br>
                    </div>
                
                <!-- div class=row One end -->
                <div class="col-md-3">
                    User Name<br>
                    <select class="form-control" name="user_id" id="user_id">
                        <!-- <option value="" selected disabled>Select Course Name</option> -->
                        {{-- dynamic looping--}} 
                        @foreach($user as $users)
                            <option value="{{$users->id}}">{{$users->name}}<option>
                        @endforeach
                    </select>
                    <br>
                </div>
            
            <div class="col-md-3">
                Status<br>
                <select class="form-control" name="status" id="status">
                    <option value="" selected disabled>Select Status</option>        
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
                <br>
            </div>
         <!-- div class=row One end -->
         <div class="col-md-3">
            Course Level<br>
            <select class="form-control" name="status" id="status">
                <option value="" selected disabled>Select level</option>        
                <option value="1">Beginner</option>
                <option value="2">Intermetidiate</option>
                <option value="3">Advanced</option>
                <option value="4">Professional</option>
            </select>
            <br>
        </div>
     </div><!-- div class=row One end -->

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                        <input onclick="return myFunction();" class="form-control btn btn-primary" type='submit' value="Register" />
                    </div>

                    <div class="col-md-2">
                        <a href="/backend/course" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->

@stop

<script>
  function myFunction() {
      if(!confirm("Are You Sure to do this ?"))
      event.preventDefault();
  }
 </script>

@section('page_script')
    
@stop

    