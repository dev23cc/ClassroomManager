@extends('layouts.main')
@section('content')
    {{ HTML::style( asset('css/login.css') ) }}
    <div class="login_form">
        <div class="row centered-form">
            <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><h1>Please login</h1> </h3>
                    </div>

                    {{ Form::open(array('url' => 'postlogin')) }}
                    @if(Session::has('Error'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>{{ Session::get('Error') }}</h4>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::text('username', null, array('class'=>'form-control input-sm','placeholder'=>'Username')) }}
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    {{ Form::password('password', array('class'=>'form-control input-sm','placeholder'=>'Password')) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{ Form::submit('Login', array('class'=>'btn btn-info btn-block')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>
@stop