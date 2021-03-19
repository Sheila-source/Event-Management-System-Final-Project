@extends('layout.master')

@section('title')
  Edit Event
@endsection

@section('content')
  <div class="container">
    <div class="mt-5 mb-5 mx-auto w-50 rounded border border-secondary border-2">
      <h4 class="mt-4 mb-4 text-primary  text-center"><b>Edit Event</b></h4>
      <form action="{{route('events.update', $event->id)}}" method="post">
        @csrf
        @method('put')
        <div class="ms-5 me-5 form-group">
          <div class="ms-5 me-5 mb-4 ms-3">
            <label class="form-label">Event Name:</label>
            <input type="text" value="{{$event->event_column}}" class="form-control w-100" name="event_input" required>
          </div>
          <div class="ms-5 me-5 mb-4 ms-3">
            <label class="form-label">Schedule:</label>
            <input type="date" value="{{$event->schedule}}" class="form-control w-100" name="event_sched" required>
          </div>
          <div class="ms-5 me-5 mb-4 ms-3">
            <label class="form-label">Venue:</label>
            <input type="text" value="{{$event->venue}}" class="form-control w-100" name="event_venue" required>
          </div>
          <div class="ms-5 me-5 mb-4 ms-3">
            <label class="form-label">In charge:</label>
            <input type="text" value="{{$event->in_charge}}" class="form-control w-100" name="event_incharge" required>
          </div>
        <center>
          <input type="submit" value="Update" class="update fs-5 fw-bold ms-3 me-3 mt-4 mb-5 btn btn-success rounded">
          <a href="{{route('events.index')}}"><input type=button value='Cancel' class="cancel fs-5 fw-bold ms-3 me-3 mt-4 mb-5 btn btn-primary rounded"></a>
        </center>
      </form>
    </div>
  </div>
@endsection
