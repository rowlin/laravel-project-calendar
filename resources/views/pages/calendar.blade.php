@extends('layouts.app')

@section('content')

    <h1>Calendar</h1>


    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
@endsection