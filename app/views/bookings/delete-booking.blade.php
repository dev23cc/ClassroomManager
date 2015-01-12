@extends('layouts.main')
{{ HTML::style( asset('css/create-teacher.css') ) }}
@section('content')

    <div class="create-teacher_form">
        <div class="row centered-form">
            <div class=" col-md-6 col-lg-6  col-lg-offset-3  text-center ">
                <div class="panel panel-default ">
                    <div class="panel-heading">
                        <h3 class="panel-title"><h1>Διαγραφή κράτησης αίθουσας</h1> </h3>
                        <h3 class="panel-title"><h2>Λίστα κρατήσεων χρήστη</h2> </h3>
                    </div>


                    {{ Form::open(array('url' => 'postCreateBooking')) }}
                    <legend>Επιλεγμένη αίθουσα: {{$classroom->getClassroomName()}}</legend>
                    @if(Session::has('error_create-teacher'))
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h4>{{ Session::get('error_create-teacher') }}</h4>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="row">
                            <div class=".col-sm-9">
                                @foreach($bookings as $key => $booking)
                                    @if($booking->classroom_id == $classroom->getClassroomId())
                                        {{ Booking::find($booking->booking_id)->getStartTime() }} {{ Booking::find($booking->booking_id)->getEndTime() }}
                                    @endif
                                @endforeach
                                <div class="form-group">
                                    Αρχή κράτησης {{ Form::datetime('date_from') }}
                                </div>
                                <div class="form-group">
                                    Λήξη κράτησης {{ Form::datetime('date_to') }}

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