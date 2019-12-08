@extends('layouts.master')
@section('title','Dashboard')
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
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="/course">Course List</a>
                        <a class="dropdown-item" href="/course/create">Course New</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">{{ $course_count }}</span>
            </h4>
            <p class="text-light">Total Course Count</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>

    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="/user">Course List</a>
                        <a class="dropdown-item" href="/user/create">Course New</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">{{ $user_count }}</span>
            </h4>
            <p class="text-light">Total User Count</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>

    </div>
</div>

<div class="col-sm-6 col-lg-3">
    <div class="card text-white bg-flat-color-1">
        <div class="card-body pb-0">
            <div class="dropdown float-right">
                <button class="btn bg-transparent dropdown-toggle theme-toggle text-light" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                    <i class="fa fa-cog"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-menu-content">
                        <a class="dropdown-item" href="/registration">Course List</a>
                        <a class="dropdown-item" href="/registration/create">Course New</a>
                    </div>
                </div>
            </div>
            <h4 class="mb-0">
                <span class="count">{{ $registration_count }}</span>
            </h4>
            <p class="text-light">Total Registration Count</p>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart1"></canvas>
            </div>
        </div>

    </div>
</div>




    </div><!-- /#right-panel -->

@stop

@section('page_script')
    
@stop