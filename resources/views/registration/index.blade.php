@extends('layouts.master')
@section('title','Course Registration - List')
@section('content')  

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Registration List</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="/dashboard">Dashboard</a></li>
                            <li class="active">Registration List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

<div class="content mt-3">
            <div class="animated fadeIn">

				<div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Registration List</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">

                  <?php 
                    $loginUser = Auth::user();
                    if($loginUser->role_id == 1){
                    ?>

                    <thead>
                      <tr>
					  	<th>Student Name</th>
                        <th>Course Name</th>
                        <th>Course Status</th>
						<th>Course Fee</th>
						<th>Registered at</th>
						<th>Updated at</th>
						<th>Action</th>
						<th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					
					@foreach ($registrations as $registration)
                      <tr>
                          <td>{{ $registration->user_name }}</td>
                          
                        <td>                            
                            @if($registration->status == 1)
                                <p class="text-success"><b>Active<b></p>
                            @else
                                <p class="text-danger"><b>In-Active<b></p>
                            @endif
                            </b>
                        </td>

						<td>{{ $registration->course_name }}</td>
						<td>{{ $registration->fee }}</td>
						<td>{{ $registration->created_at }}</td>
						<td>{{ $registration->updated_at }}</td>
						<td><a class="btn btn-primary" onclick="return myFunction();"  href='registration/edit/{{ $registration->id }}'>Edit</a></td>
						<td><a class="btn btn-danger" onclick="return myFunction1();" href='registration/delete/{{ $registration->id }}'>Delete</a></td>
					  </tr>
					  @endforeach

                    </tbody>
                    <?php }
                    else {
                        ?>

                    <thead>
                      <tr>
					  	<th>Student Name</th>
                        <th>Course Status</th>
                        <th>Course Name</th>
						<th>Course Fee</th>
						<th>Registered at</th>
                      </tr>
                    </thead>
                    <tbody>
					
					@foreach ($registrations as $registration)
                      <tr>
                          <td>{{ $registration->user_name }}</td>
                        <td>                            
                            @if($registration->status == 1)
                                <p class="text-success"><b>Active<b></p>
                            @else
                                <p class="text-danger"><b>In-Active<b></p>
                            @endif
                            </b>
                        </td>
						<td>{{ $registration->course_name }}</td>
						<td>{{ $registration->fee }}</td>
						<td>{{ $registration->created_at }}</td>
					  </tr>
					  @endforeach

                    </tbody>

                    <?php
                    }
                    ?>

                  </table>
                        </div>
                    </div>
				</div>
				
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

@stop

<script>
function myFunction() {
    if(!confirm("Are You Sure to update this ?"))
    event.preventDefault();
}

function myFunction1() {
    if(!confirm("Are You Sure to delete this ?"))
    event.preventDefault();
}
</script>

@section('page_script')
    
@stop