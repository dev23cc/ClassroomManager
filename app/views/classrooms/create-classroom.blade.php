@extends('layouts.main')
{{ HTML::style( asset('css/create-teacher.css') ) }}
@section('content')
    <div class="create-teacher_form">
        <div class="row centered-form">
            <div class=" col-md-4 col-lg-6  col-lg-offset-3  text-center ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><h1>Δημιουργία νέας αίθουσας</h1> </h3>
                    </div>
                    {{ Form::open(array('url' => 'postCreateClassroom')) }}
                    @if(Session::has('error_create-classroom'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>{{ Session::get('error_create-classroom') }}</h4>
                        </div>
                    @endif
                    <div class="panel-body">
                        <div class="row">
                            <div class=".col-sm-9">
                                <div class="form-group">
                                    {{ Form::text('ClassroomName', null, array('class'=>'form-control input-sm','placeholder'=>'Όνομα αίθουσας')) }}
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