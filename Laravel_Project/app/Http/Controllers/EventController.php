<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{

    public function index()
    {
      $events = Event::all();
      return view("pages.home")->with("events", $events);
    }

    public function create()
    {
      return view("pages.add");
    }

    public function store(Request $request)
    {
      $event = new Event();
      $event->event_column = $request->event_name;
      $event->schedule = $request->event_sched;
      $event->venue = $request->event_venue;
      $event->in_charge = $request->event_incharge;

      $event->save();
      return redirect()->route('events.index');
    }

    public function show($id)
    {
      $event = Event::find($id);
      return view("pages.event")->with("event", $event);
    }

    public function edit($id)
    {
      $event = Event::find($id);
      return view("pages.edit")->with("event", $event);
    }

    public function update(Request $request, $id)
    {
      $event = Event::find($id);
      $event->event_column = $request->event_input;
      $event->schedule = $request->event_sched;
      $event->venue = $request->event_venue;
      $event->in_charge = $request->event_incharge;
      $event->save();

      return redirect()->route('events.index');
    }

    public function destroy($id)
    {
      $event = Event::find($id);
      $event->delete();

      return redirect()->route('events.index');
    }
}
