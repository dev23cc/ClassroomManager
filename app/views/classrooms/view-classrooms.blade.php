@extends('layouts.main')
{{ HTML::style( asset('css/view-classrooms.css') ) }}
@section('content')


    <table class="table table-striped  table-hover text-center ">
        <tr class="info ">
            <td>A/A</td>
            <td>Όνομα αίθουσας</td>
            <td>Κρατήσεις</td>
            <td>Νέα κράτηση</td>
            <td>Διαγραφή κράτησης</td>
        </tr>
        @foreach($classrooms as $key => $value)
            <tr class="active">
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                @foreach($bookings as $key => $booking)
                    @if($booking->classroom_id == $value->id)
                        <td> Kαθηγητής: {{ User::find($booking->teacher_id)->getName() }}  από: {{$booking->start_time}} έως: {{$booking->end_time}} </td>
                    @endif
                <div class="inv">{{DB::table('classrooms')->where('id', $booking->classroom_id)->update(array('isfree' => false))}}</div>

                @endforeach
                @if($value->isfree)
                    <td> - </td>
                @endif
                <td> <a href=" {{route("create-booking", $value->id)}} " class="btn btn-default" >Νέα κράτηση</a></td>
                <td> <a href=" {{route("delete-booking", $value->id)}} " class="btn btn-success">Διαγραφή κράτησης</a</td>
            </tr>
        @endforeach
    </table>

@stop