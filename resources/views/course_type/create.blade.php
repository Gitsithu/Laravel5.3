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
                        <li class="breadcrumb-item active">course</li>
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

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <!-- div class=row one start -->
                @if (session('fail'))
                <div class="flash-message col-md-12">
                    <div class="alert alert-success ">
                        {{session('fail')}}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>



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
                    <strong class="card-title">Course Type Create</strong>
                </div><!-- card-header end -->

                <div class="card-body">
                    <!-- card-body start -->

                    <form action="/backend/course_type" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="row">
                            <!-- div class=row One start -->

                           
                            <div class="col-md-4">
                                Image<br>
                                <input class="form-control" type='file' name='image' value="{{ old('image') }}"/>
                            </div>

                            <div class="col-md-4">
                                Status<br>
                                <select class="form-control" name="status" id="status">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="1"  {{ (old("status") == 1 ? "selected":"") }}>Active</option>
                                    <option value="0" {{ (old("status") == 0 ? "selected":"") }}>Inactive</option>
                                </select>
                                <br>
                            </div>
                        </div><!-- div class=row One end -->

                        <div class="row">
                            <!-- div class=row One start -->
                            <div class="col-md-8">
                                Remark<br>
                                <input class="form-control" type='text' name='remark' value="{{ old('remark') }}"/>
                            </div>

                        </div><!-- div class=row One end -->

                        <div class="row">
                            <!-- div class=row One start -->

                            <div class="col-md-8">
                            </div>

                            <div class="col-md-2">
                                <input class="form-control btn btn-primary" type='submit' value="Save" />
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