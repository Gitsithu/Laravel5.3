@extends('layouts.master')
@section('title','Course - New')
@section('content')
<?php
$loginUser = Auth::user();
?>


@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Car Type</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/home">Home</a></li>
                        <li class="breadcrumb-item active">car</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <!-- div class=row one start -->
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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <!-- card-header start -->

                        <div class="row">
                            <!-- row start -->
                            <div class="col-md-2">
                                <strong class="card-title">Car Type List</strong>
                            </div>

                            <div class="col-md-8">
                            </div>

                            <div class="col-md-2">
                                <?php
                                $loginUser = Auth::user();
                                if ($loginUser->role_id == 1 or $loginUser->role_id == 2) {
                                    ?>
                                    <div class="">
                                        <!-- div class=col 2 One start -->
                                        <a href="/backend/course_type/create" class="form-control btn btn-primary" type="button" id="btn_new" name="btn_new">New Course Type</a>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>

                        </div><!-- row end -->

                    </div><!-- card-header end -->

                    <div class="card-body">
                        <!-- card-body start -->
                        <table id="example1" class="table table-bordered table-striped">

                            <?php
                            if ($loginUser->role_id == 1 or $loginUser->role_id == 2) {
                                ?>

                                <thead>
                                    <tr>

                                        <th>Image</th>
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
                                        
                                        <td><img src="{{ $obj->image }}" class="rounded" width="75" /></td>
                                      

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

                                        <td><a class="btn btn-primary" onclick="return myFunction();" href='/backend/course_type/{{ $obj->id }}/edit'>View</a></td>
                                        <td><a class="btn btn-danger" onclick="return myFunction1();" href='/backend/course_type/delete/{{ $obj->id }}'>Delete</i></a>
                                        </td>

                                    </tr>
                                    @endforeach

                                </tbody>

                            <?php } else {
                                ?>

                                <thead>
                                    <tr>
                                        <th>Reamark</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($objs as $obj)
                                    <tr>
                                        <td>{{ $obj->remark }}</td>
                                        <td><img src="{{ $obj->image }}" class="rounded" width="75" /></td>
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
</div><!-- div class=content end -->

<!-- /.row (main row) -->


</div><!-- /.container-fluid -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection