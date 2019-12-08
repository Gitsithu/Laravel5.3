@extends('layouts.master')
@section('title','Course - New')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Course > Create</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb texbt-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Course Create</li>
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
                <strong class="card-title">Course Create</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/backend/course/store" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-3"><!-- div class=col 12 One start -->
                        Course Name<br>
                        <input class="form-control" type='text' name='name' />
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-3">
                        Fee<br>
                        <input class="form-control" type='text' name='fee' />
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
                <!-- div class=row One start -->

                    <div class="col-md-3">
                        Course Image<br>
                            <input class="form-control" type='file' name='image' />
                        <br>
                    </div>
                </div>

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                        Course Level<br><br>
                        <p>Beginner <input class="form-control" type='radio' name='level' value="1"/></p>
                        <p>Intermediate <input class="form-control" type='radio' name='level' value="2"/></p>
                        <p>Advanced <input class="form-control" type='radio' name='level' value="3"/></p>
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                    Course Requirements<br><br>
                        <p>Require Entry Test <input class="form-control" type='checkbox' name='require_entry_test'/></p>
                        <p>Require basic html <input class="form-control" type='checkbox' name='require_basic_html'/></p>
                        <p>Require css html <input class="form-control" type='checkbox' name='require_css_html'/></p>
                        <p>Require javascript html <input class="form-control" type='checkbox' name='require_javascript_html'/></p>
                    </div>
                </div><!-- div class=row One end -->

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-8">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Save" />
                    </div>

                    <div class="col-md-2">
                        <a href="/course" class="form-control btn btn-secondary">Cancel</a>
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->

@stop

@section('page_script')
    
@stop

    