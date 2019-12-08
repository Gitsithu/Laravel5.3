@extends('layouts.master')
@section('title','Registration - New')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Registration > Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Registration Edit</li>
                </ol>
            </div>
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
                <strong class="card-title">Registration Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			<form action="/backend/registration/update/<?php echo $registrations[0]->id; ?>" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                        Registration Name<br>
                        <input class="form-control" type='text' name='name' value='<?php echo
			$registrations[0]->user_name; ?>' readonly/>
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                        Course Fee<br>
                        <input class="form-control" type='text' name='fee' value='<?php echo
	$courses[0]->fee; ?>' readonly />
                    </div>

                    <div class="col-md-4">
                        Course Name<br>
                        <select class="form-control" name="course_id" id="course_id">
							<option value="" selected disabled>Select Course Name</option>

							@foreach($courses as $course)
								
								@if($registrations[0]->course_id == $course->id)
									<option value="{{$course->id}}" selected>{{$course->name}} ==== {{$course->fee}} - KS</option>
								@else
									<option value="{{$course->id}}">{{$course->name}} ==== {{$course->fee}} - KS</option>
								@endif

							@endforeach
						</select>
                        <br>
                    </div>
                </div><!-- div class=row One end -->

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                        <input onclick="return myFunction();"  class="form-control btn btn-primary" type='submit' value="Update" />
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

@section('page_script')
<script>
function myFunction() {
    if(!confirm("Are You Sure to update this ?"))
    event.preventDefault();
}
</script>
    
@stop

    