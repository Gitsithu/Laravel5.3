@extends('layouts.master')
@section('title','AjaxTesting - New')
@section('content')

<script src="js/jquery.js"></script>
<script>
function getMessage(){
$.ajax({
type:'POST',
url:'/getmsg',
data:'_token=<?php echo csrf_token() ?>',
success:function(data){
$("#msg").html(data.msg);
}
});
}
</script>

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>AjaxTesting > Edit</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="/dashboard">Dashboard</a></li>
                    <li class="active">AjaxTesting Edit</li>
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
                <strong class="card-title">AjaxTesting Edit</strong>
            </div><!-- card-header end -->
    
            <div class="card-body">  <!-- card-body start -->

			

                <div class="row"><!-- div class=row One start -->

                    <div class="col-md-12"><!-- div class=col 12 One start -->
                        <div>
                            MY TESTING MY TESTINGMY TESTINGMY TESTINGMY 
                            TESTINGMY TESTINGMY TESTINGMY TESTINGMY TESTINGMY 
                            TESTINGMY TESTINGMY TESTINGMY TESTINGMY TESTINGMY 
                            TESTINGMY TESTINGMY TESTINGMY TESTINGMY TESTINGMY 
                            TESTINGMY TESTINGMY TESTINGMY 
                            TESTINGMY TESTINGMY TESTINGMY TESTINGMY TESTING

                        </div>
                        <br>


                        <div id='msg'>This message will be replaced using Ajax. Click the button to
                        replace the message.</div>
                        <input type="button" class="btn btn-primary" value="Replace Message" onclick="getMessage()">
                    </div><!-- div class=col 12 One end -->
                </div><!-- div class=row One end -->

                

                </form>
            </div> <!-- card-body end -->

        </div><!-- card end -->
    </div><!-- div class=FadeIn start -->
</div><!-- div class=row content end -->

@stop

@section('page_script')
    
@stop

    