@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All Courses</div>

                <div class="panel-body">
                    <table border=1>
                        <tr>
                            <td>Course Name</td>
                            <td>Course Fee</td>
                        </tr>

                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->fee }}</td>
                        </tr>

                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
