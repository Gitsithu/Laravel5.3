@extends('layouts.master')
@section('title','Email - New')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Email > Create</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">Email Create</li>
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


<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Basic Email</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/sendbasicemail2" method="get">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                       To Email Address / Receiptent Mail Address <br>
                        <input class="form-control" type='text' name='email' />
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                       To Email Name / Receiptent Name <br>
                        <input class="form-control" type='text' name='email_name' />
                    </div><!-- div class=col 12 One end -->

                    <div class="col-md-4"><!-- div class=col 12 One start -->
                       Email Subject <br>
                        <input class="form-control" type='text' name='subject' />
                    </div><!-- div class=col 12 One end -->

                </div><!-- div class=row One end -->


                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-12">
                        Mail Message<br>
                        <textarea rows="5" cols="50" class="form-control" name='message' /></textarea>
                        <br>
                    </div>
                </div><!-- div class=row One end -->

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-10">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Send Basic Email with Custom Message" />
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">HTML Email</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/sendhtmlemail2" method="get">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-10">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Send HTML Email" />
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->

<div class="content mt-3"><!-- div class=row content start -->
    <div class="animated fadeIn"><!-- div class=FadeIn start -->
        <div class="card"><!-- card start -->

            <div class="card-header"><!-- card-header start -->
                <strong class="card-title">Email with Attachments</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

                <form action="/sendattachmentemail" method="get">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-10">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Send Attachments Email" />
                    </div>

                </div><!-- div class=row One end -->

                </form>
            </div> <!-- card-body end -->

            <div class="card-body">  <!-- card-body start -->

                <form action="/sendattachmentemail2" method="get">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                
                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-10">
                    </div>

                    <div class="col-md-2">
                        <input class="form-control btn btn-primary" type='submit' value="Send Attachments Email2" />
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

    