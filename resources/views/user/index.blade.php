@extends('layouts.master')
@section('title','User - New')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">User List</li>
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

<div class="content mt-3">
    <div class="animated fadeIn">
       
        <div class="card"><!-- card start -->
            <div class="row"><!-- div class=row one start -->
                
                <div class="col-md-10">
                </div>
                
                <div class="col-md-2"><!-- div class=col 2 One start -->
                        <a href="/user/create" class="form-control btn btn-primary" type="button" id="btn_new" name="btn_new">New User</a>
                </div><!-- div class=col 2 One end -->
            
            </div><!-- div class=row one end -->
        </div><!-- card end -->

        <div class="row"><!-- div class=row Two start -->
            <div class="col-md-12"><!-- div class=col 12 One start -->
                <div class="card"><!-- card start -->

                    <div class="card-header"><!-- card-header start -->
                        <strong class="card-title">User List</strong>
                    </div><!-- card-header end -->
            
                    <div class="card-body">  <!-- card-body start -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($objs as $obj)
                                <tr>
                                <td>{{ $obj->name }}</td>
                                <td>{{ $obj->email }}</td>

                                <td>
                                    <b>
                                    @if($obj->status == 1)
                                        <p class="text-primary">Active</p>
                                    @else
                                        <p class="text-danger">In-Active</p>
                                    @endif
                                    </b>
                                </td>

                                <td>{{ $obj->created_at }}</td>
                                <td>{{ $obj->updated_at }}</td>

                                <td><a class="btn btn-primary" href='/user/edit/{{ $obj->id }}'>Edit</a></td>
                                <td><a class="btn btn-danger" onclick="return myFunction();" href='/user/delete/{{ $obj->id }}'>Delete</i></a>
                                </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div> <!-- card-body end -->
                </div><!-- card end -->
            </div><!-- div class=col 12 Two end -->
        </div><!-- div class=row Two end -->

    </div><!-- .animated -->
</div><!-- .content -->


</div><!-- /#right-panel -->

@stop

<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this ?"))
      event.preventDefault();
  }
 </script>

@section('page_script')

@stop
