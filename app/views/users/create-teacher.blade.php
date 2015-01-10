@extends('layouts.main')
@section('content')
    {{ HTML::style(asset('css/create-teacher.css') ) }}
    <div class="create-teacher_form">
        <div class="row centered-form">
            <div class=" col-md-4 col-lg-6  col-lg-offset-3  text-center ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><h1>Δημιουργία νέου καθηγητή</h1> </h3>
                    </div>


                    {{ Form::open(array('url' => 'postCreateTeacher')) }}
                    @if(Session::has('Error'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>{{ Session::get('Error') }}</h4>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="row">
                            <div class=".col-sm-9">
                                <div class="form-group">
                                    {{ Form::text('username', null, array('class'=>'form-control input-sm','placeholder'=>'Username')) }}
                                </div>
                            </div>
                            <div class=".col-sm-9">
                                <div class="form-group">
                                    {{ Form::text('Name', null,array('class'=>'form-control input-sm','placeholder'=>'Name')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::password('password', array('class'=>'form-control input-sm','placeholder'=>'Password')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::password('verify-password', array('class'=>'form-control input-sm','placeholder'=>'Verify Password')) }}
                                </div>

                            </div>
                        </div>
                    </div>
                    {{ Form::submit('Δημιουργία', array('class'=>'btn btn-info btn-block')) }}

                    {{ Form::close() }}

                </div>
            </div>
        </div>
    </div>

@stop