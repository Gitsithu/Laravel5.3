@extends('layouts.master_sampletemplate')
@section('title','UI Button')
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
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Buttons</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="buttons">

                        <!-- Left Block -->
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Badges </strong>
                                    <small>Use this class
                                        <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> or <code>&lt;input&gt;</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary">Primary</button>
                                    <button type="button" class="btn btn-secondary">Secondary</button>
                                    <button type="button" class="btn btn-success">Success</button>
                                    <button type="button" class="btn btn-danger">Danger</button>
                                    <button type="button" class="btn btn-warning">Warning</button>
                                    <button type="button" class="btn btn-info">Info</button>
                                    <button type="button" class="btn btn-link">Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Button tags </strong>
                                    <small>Use this class
                                        <code>.btn</code> or <code>&lt;button&gt;</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                    <button class="btn btn-danger" type="submit">Button</button>
                                    <input class="btn btn-info" type="button" value="Input">
                                    <input class="btn btn-success" type="submit" value="Submit">
                                    <input class="btn btn-warning" type="reset" value="Reset">
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Disabled state </strong>
                                    <small>Use this class
                                        <code>disabled="disabled"</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary" disabled>Primary</button>
                                    <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                                    <button type="button" class="btn btn-success" disabled>Success</button>
                                    <button type="button" class="btn btn-danger" disabled>Danger</button>
                                    <button type="button" class="btn btn-warning" disabled>Warning</button>
                                    <button type="button" class="btn btn-info" disabled>Info</button>
                                    <button type="button" class="btn btn-link" disabled>Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Button with Icons </strong>
                                    <small>Use <code>&lt;i&gt;</code></small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                    <button type="button" class="btn btn-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                                    <button type="button" class="btn btn-link"><i class="fa fa-link"></i>&nbsp; Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Small Button </strong>
                                    <small>Use this class
                                        <code>.btn-sm</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                                    <button type="button" class="btn btn-success btn-sm">Success</button>
                                    <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                    <button type="button" class="btn btn-danger btn-sm">Danger</button>
                                    <button type="button" class="btn btn-link btn-sm">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Small Button with Icons </strong>
                                    <small>Use this class
                                        <code>.btn-sm</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                    <button type="button" class="btn btn-secondary btn-sm"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                    <button type="button" class="btn btn-warning btn-sm"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                    <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-rss"></i>&nbsp;Danger</button>
                                    <button type="button" class="btn btn-link btn-sm"><i class="fa fa-link"></i>&nbsp; Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Large Button </strong>
                                    <small>Use this class
                                        <code>.btn-lg</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                    <button type="button" class="btn btn-success btn-lg">Success</button>
                                    <button type="button" class="btn btn-warning btn-lg">Warning</button>
                                    <button type="button" class="btn btn-danger btn-lg">Danger</button>
                                    <button type="button" class="btn btn-link btn-lg">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Large Active Button </strong>
                                    <small>Use this class
                                        <code>.btn-lg .active</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg active">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-lg active">Secondary</button>
                                    <button type="button" class="btn btn-success btn-lg active">Success</button>
                                    <button type="button" class="btn btn-warning btn-lg active">Warning</button>
                                    <button type="button" class="btn btn-danger btn-lg active">Danger</button>
                                    <button type="button" class="btn btn-link btn-lg active">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Block Level Buttons </strong>
                                    <small>Use this class
                                        <code>.btn-block</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                    <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

                                    <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
                                    <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary</button>
                                    <button type="button" class="btn btn-success btn-lg btn-block">Success</button>
                                    <button type="button" class="btn btn-warning btn-lg btn-block">Warning</button>
                                    <button type="button" class="btn btn-danger btn-lg btn-block">Danger</button>
                                    <button type="button" class="btn btn-link btn-lg btn-block">Link</button>
                                </div>
                            </div><!-- /# card -->
                        </div>



                        <!-- Right Block -->
                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-header">
                                    <strong>Outline Buttons </strong>
                                    <small>Use this class
                                        <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code> or <code>&lt;input&gt;</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                    <button type="button" class="btn btn-outline-success">Success</button>
                                    <button type="button" class="btn btn-outline-danger">Danger</button>
                                    <button type="button" class="btn btn-outline-warning">Warning</button>
                                    <button type="button" class="btn btn-outline-info">Info</button>
                                    <button type="button" class="btn btn-outline-link">Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Button tags </strong>
                                    <small>Use this class
                                        <code>.btn</code> or <code>&lt;button&gt;</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-outline-primary" href="#" role="button">Link</a>
                                    <button class="btn btn-outline-danger" type="submit">Button</button>
                                    <input class="btn btn-outline-info" type="button" value="Input">
                                    <input class="btn btn-outline-success" type="submit" value="Submit">
                                    <input class="btn btn-outline-warning" type="reset" value="Reset">
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Disabled state </strong>
                                    <small>Use this class
                                        <code>disabled="disabled"</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
                                    <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
                                    <button type="button" class="btn btn-outline-success" disabled>Success</button>
                                    <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
                                    <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
                                    <button type="button" class="btn btn-outline-info" disabled>Info</button>
                                    <button type="button" class="btn btn-outline-link" disabled>Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Button with Icons </strong>
                                    <small>Use <code>&lt;i&gt;</code></small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                    <button type="button" class="btn btn-outline-secondary"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                    <button type="button" class="btn btn-outline-success"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                    <button type="button" class="btn btn-outline-warning"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fa fa-rss"></i>&nbsp; Danger</button>
                                    <button type="button" class="btn btn-outline-link"><i class="fa fa-link"></i>&nbsp; Link</button>
                                </div>
                            </div><!-- /# card -->


                            <div class="card">
                                <div class="card-header">
                                    <strong>Small Button </strong>
                                    <small>Use this class
                                        <code>.btn-sm</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary btn-sm">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                                    <button type="button" class="btn btn-outline-warning btn-sm">Warning</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
                                    <button type="button" class="btn btn-outline-link btn-sm">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Small Button with Icons </strong>
                                    <small>Use this class
                                        <code>.btn-sm</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa fa-star"></i>&nbsp; Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm"><i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-sm"><i class="fa fa-magic"></i>&nbsp; Success</button>
                                    <button type="button" class="btn btn-outline-warning btn-sm"><i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                    <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa fa-rss"></i>&nbsp;Danger</button>
                                    <button type="button" class="btn btn-outline-link btn-sm"><i class="fa fa-link"></i>&nbsp; Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Large Button </strong>
                                    <small>Use this class
                                        <code>.btn-lg</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg">Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-lg">Success</button>
                                    <button type="button" class="btn btn-outline-warning btn-lg">Warning</button>
                                    <button type="button" class="btn btn-outline-danger btn-lg">Danger</button>
                                    <button type="button" class="btn btn-outline-link btn-lg">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Large Active Button </strong>
                                    <small>Use this class
                                        <code>.btn-lg .active</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary btn-lg active">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg active">Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-lg active">Success</button>
                                    <button type="button" class="btn btn-outline-warning btn-lg active">Warning</button>
                                    <button type="button" class="btn btn-outline-danger btn-lg active">Danger</button>
                                    <button type="button" class="btn btn-outline-link btn-lg active">Link</button>
                                </div>
                            </div><!-- /# card -->

                            <div class="card">
                                <div class="card-header">
                                    <strong>Block Level Buttons </strong>
                                    <small>Use this class
                                        <code>.btn-block</code>
                                    </small>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>

                                    <button type="button" class="btn btn-outline-primary btn-lg btn-block">Primary</button>
                                    <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Secondary</button>
                                    <button type="button" class="btn btn-outline-success btn-lg btn-block">Success</button>
                                    <button type="button" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                                    <button type="button" class="btn btn-outline-danger btn-lg btn-block">Danger</button>
                                    <button type="button" class="btn btn-outline-link btn-lg btn-block">Link</button>
                                </div>
                            </div><!-- /# card -->
                        </div>
                    </div> <!-- .buttons -->

                </div><!-- .row -->
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

@stop

@section('page_script')
    
@stop

    