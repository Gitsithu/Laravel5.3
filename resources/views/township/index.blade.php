@extends('layouts.master')
@section('title','Course - New')
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
                    <li class="active">Township List</li>
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
            @elseif (session('fail'))
                <div class="flash-message col-md-12">
                <div class="alert alert-danger ">
                    {{session('fail')}}
                </div>
                </div>
            @endif
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
       
        <?php 
        $loginUser = Auth::user();
        if ($loginUser->role_id == 1) {
            ?>
        <div class="card"><!-- card start -->
            <div class="row"><!-- div class=row one start -->
                
                <div class="col-md-10">
                </div>
                
                <div class="col-md-2"><!-- div class=col 2 One start -->
                        <a href="/backend/township/create" class="form-control btn btn-primary" type="button" id="btn_new" name="btn_new">New Township</a>
                </div><!-- div class=col 2 One end -->
            
            </div><!-- div class=row one end -->
        </div><!-- card end -->
        <?php
        }
        ?>

        <div class="row"><!-- div class=row Two start -->
            <div class="col-md-12"><!-- div class=col 12 One start -->
                <div class="card"><!-- card start -->

                    <div class="card-header"><!-- card-header start -->
                        <strong class="card-title">Township List</strong>
                    </div><!-- card-header end -->
            
                    <div class="card-body">  <!-- card-body start -->
                        <table id="bootstrap-data-table" class="table table-striped table-bordered">

                        <?php
                            if($loginUser->role_id == 1){
                        ?>
                            
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>status</th>
                                    <th>Created at</th>
                                    <th>Updated at</th>
                                    <th>Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($township as $township)
                                <tr>
                                <td>{{ $township->name }}</td>
                                <td>{{ $township->description }}</td>
                                
                                <td>
                                    <b>
                                    @if($township->status == 1)
                                        <p class="text-primary">Active</p>
                                    @else
                                        <p class="text-danger">In-Active</p>
                                    @endif
                                    </b>
                                </td>

                                <td>{{ $township->created_at }}</td>
                                <td>{{ $township->updated_at }}</td>

                                <td><a class="btn btn-primary" onclick="return myFunction();"  href='/backend/township/edit/{{ $township->id }}'>Edit</a></td>
                                <td><a class="btn btn-danger" onclick="return myFunction1();" href='/backend/township/delete/{{ $township->id }}'>Delete</i></a>
                                </td>

                                </tr>
                            @endforeach

                            </tbody>

                            <?php }
                                else {
                            ?>

                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>

                            @foreach ($township as $township)
                                <tr>
                                <td>{{ $township->name }}</td>
                                <td>{{ $township->description }}</td>
                                </td>

                                </tr>
                            @endforeach

                            </tbody>

                            <?php
                            }
                            ?>
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
