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
                    <li class="active">Township Create</li>
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
                <strong class="card-title">Township Create</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/backend/township/store" method="post">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                        Township Name<br>
                        <input class="form-control" type='text' name='name' />
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4">
                        Description<br>
                        <input class="form-control" type='text' name='description' />
                    </div>

                    <div class="col-md-4">
                        Status<br>
                        <select class="form-control" name="status" id="status">
                            <option value="" selected disabled>Select Status</option>        
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br>
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

    