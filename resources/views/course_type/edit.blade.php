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
                    <h1 class="m-0 text-dark">Car</h1>
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

    @if (count($errors) > 0)
    <div class="content mt-3">
        <!-- div class=row content start -->
        <div class="animated fadeIn">
            <!-- div class=FadeIn start -->
            <div class="card">
                <!-- card start -->

                <div class="card-body">
                    <!-- card-body start -->


                    <div class="row">
                        <!-- div class=row One start -->
                        @foreach ($errors->all() as $error)
                        <div class="col-md-12">
                            <!-- div class=col 12 One start -->
                            <p class="text-danger">* {{ $error }}</p>
                        </div><!-- div class=col 12 One end -->
                        @endforeach
                    </div><!-- div class=row One end -->


                </div> <!-- card-body end -->

            </div><!-- card end -->
        </div><!-- div class=FadeIn start -->
    </div><!-- div class=row content end -->
    @endif



<!-- Main content -->
<section class="content">        

    <!-- Main row -->
    <div class="row">
        <!-- div class=row Two start -->
        <div class="col-md-12">
            <!-- div class=col 12 One start -->
            <div class="card">
                <!-- card start -->

                <div class="card-header">
                    <!-- card-header start -->
                    <strong class="card-title">Course Type Edit</strong>
                </div><!-- card-header end -->

                <div class="card-body">
                    <!-- card-body start -->

                    <form action="/backend/course_type/{{ isset($obj)? $obj->id:0 }}" method="post" enctype="multipart/form-data">
                        <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
                        {{csrf_field()}}
                        {{ method_field('PATCH') }}

                        <div class="row">
                            <!-- div class=row One start -->

                           
                            <div class="col-md-4">
                                Image<br>
                                <input class="form-control" type='file' name='image'  value="{{ isset($obj)? $obj->image:Request::old('image') }}"/>
                            </div>

                            <div class="col-md-4">
                                Status<br>
                                <select class="form-control" name="status" id="status">
                                <?php
                                if(isset($obj)){
                                ?>

                                    <option value="" selected disabled>Select Status</option>
                                    <option value="1" <?php if ($obj->status == 1){ echo 'selected'; } ?> >Active</option>
                                    <option value="0" <?php if ($obj->status == 0){ echo 'selected'; } ?> >In-Active</option>

                                <?php
                                }
                                else{
                                ?>
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                <?php 
                                }
                                ?>
                                    
                                </select>
                                <br>
                            </div>
                        </div><!-- div class=row One end -->

                        <div class="row">
                            <!-- div class=row One start -->

                            <div class="col-md-4">
                                <!-- div class=col 12 One start -->
                                Course Type Remark<br>
                                <input class="form-control" type='text' name='remark'  value="{{ isset($obj)? $obj->remark:Request::old('remark') }}"/>
                            </div><!-- div class=col 12 One end -->

                                    
                        </div><!-- div class=row One end -->

                        

                        <div class="row">
                            <!-- div class=row One start -->

                            <div class="col-md-8">
                            </div>

                            <div class="col-md-2">
                                <input class="form-control btn btn-primary" type='submit' value="Update" />
                            </div>

                            <div class="col-md-2">
                                <a href="/backend/course_type" class="form-control btn btn-secondary">Cancel</a>
                            </div>

                        </div><!-- div class=row One end -->

                    </form>
                </div> <!-- card-body end -->

            </div><!-- card end -->
        </div><!-- div class=col 12 Two end -->
    </div><!-- div class=row Two end -->

    </div><!-- /.row (main row) -->


</div><!-- /.container-fluid -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection