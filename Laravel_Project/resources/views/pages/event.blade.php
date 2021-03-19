@extends('layout.master')

@section('title')
  View Event
@endsection

@section('content')
  <div class="mt-5 mb-5 mx-auto border border-secondary border-2" style="width: 650px;">
    <h3 class="mt-4 mb-4 text-primary text-center"><b>{{$event->event_column}}</b></h3>
    <h5 class="mb-2 text-center">Schedule: {{$event->schedule}}</h5>
    <h5 class="mb-2 text-center">Venue: {{$event->venue}}</h5>
    <h5 class="mb-2 text-center">In charge: {{$event->in_charge}}</h5>
    <center>
      <a class="back p-2 mt-4 mb-5 fs-5 text-decoration-none rounded badge bg-primary" href="{{route('events.index')}}">Back</a>
    </center>
  </div>
@endsection
