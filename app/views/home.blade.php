@extends('layouts.main')
{{ HTML::style( asset('css/home.css') ) }}
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <h4><strong>{{ Session::get('success') }}</strong> ως {{Auth::user()->getName()}} </h4>
        </div>
    @endif
    @if(Session::has('success_logout'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <h4><strong>{{ Session::get('success_logout') }}</strong></h4>
        </div>
    @endif
    @if(Session::has('success_create-teacher'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <h4><strong>{{ Session::get('success_create-teacher') }}</strong></h4>
        </div>
    @endif
    <div class="home_title">Αιθουσιολόγιο</div>
@stop