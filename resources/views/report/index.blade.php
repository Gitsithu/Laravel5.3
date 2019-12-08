@extends('layouts.master')
@section('title','Registration - Report')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Registration > Report</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Registration Report</li>
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

<div class="content mt-3">
    <div class="animated fadeIn">

        
            <div class="card"><!-- .card start -->
                <div class="card-header">
                    <div class="col-md-12">
                        <strong class="card-title">Registartion Report</strong>
                    </div>
                </div>

                <div class="card-body">

                    <div class="row"><!-- .row start -->
                        <div class="col-md-3">
                            Status </br>
                            <select class="form-control" name="course_id" id="course_id">
                                <option value="0">All Courses</option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-3">
                            <br>
                            <button type="button" class="form-control btn btn-primary" onclick="report_search_with_type();">Preview By List</button>

                        </div>
                        <div class="col-md-3">
                            <br>
                            <button type="button" class="form-control btn btn-primary" onclick="report_pdf_preview_with_type();">Preview with PDF</button>
                        </div>

                        <div class="col-md-3">
                            <br>
                            
                        </div>
                    </div><!-- .row end -->

                    <div class="row"><!-- .row start -->
                        <div class="col-md-3">
                            
                        </div>

                        <div class="col-md-3">
                            <br>
                            <button type="button" class="form-control btn btn-primary" onclick="report_export_with_type();">Export Excel</button>

                        </div>
                        <div class="col-md-3">
                            <br>
                            <button type="button" class="form-control btn btn-primary" onclick="report_pdf_export_with_type();">Export Pdf</button>
                        </div>

                        <div class="col-md-3">
                            <br>
                        </div>
                    </div><!-- .row end -->

                </div><!-- .card-body end -->
            </div><!-- .card end -->



            <div class="card"><!-- .card start -->
                <div class="card-header">
                    <div class="col-md-12">
                        <strong class="card-title">Result</strong>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row"><!-- .row start -->

                        <?php
                        $totalAmount = 0;
                        ?>
                        <div class="col-md-12">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Student Name</th>
                                        <th>Course Name</th>
                                        <th>Registered at</th>
                                        <th>Course Fee</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($registrations as $registration)
                                    <tr>
                                        <td>{{ $registration->user_name }}</td>
                                        <td>{{ $registration->course_name }}</td>
                                        <td>{{ $registration->created_at }}</td>
                                        <td align="right">{{ $registration->fee }}</td>
                                    </tr>

                                    <?php $totalAmount += $registration->fee; ?>
                                    @endforeach

                                    <tr>
                                        <td colspan="3"><b> Total Fee</b></td>
                                        <td align="right">{{ $totalAmount }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div><!-- .row end -->

                </div><!-- .card end -->
            
            
        </div><!-- .animated -->
</div><!-- .content -->

@stop

@section('page_script')
<script src="/js/jquery.js"></script>
<script>
    function report_search_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/search/" + type;
        window.location = form_action;
    }

    function report_export_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/exportexcel/" + type;
        window.location = form_action;
    }

    function report_pdf_export_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/exportpdf/" + type;
        window.location = form_action;
    }

    function report_pdf_preview_with_type() {
        var type = $("#course_id").val();
        var form_action = "/backend/report/previewpdf/" + type;
        window.location = form_action;
    }
</script>



@stop