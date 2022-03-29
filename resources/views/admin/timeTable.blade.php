@extends('admin.layout.mastar')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">First cross Should Reach</th>
      <th scope="col">First cross Reached</th>
      <th scope="col">Train Name</th>
      <th scope="col">Class</th>
      <th scope="col">Late Time</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($trainCrossingDetails as $key => $value)

    @php
    $users = DB::table('trainschedule')->select('firstCrossPass')->where('trainName', $value->trainCode)->first();

    $start = new DateTime($users->firstCrossPass);
    $end   = new DateTime($value->enterSignal);

    $interval   = $start->diff($end);
    $difference = $end->getTimestamp() - $start->getTimestamp();

    $hour = intdiv($difference,3600);
    $minute = ($difference%3600)/60;

    @endphp

      <tr>
        <td>{{$value->date}}</td>
        <td>{{$users->firstCrossPass}}</td>
        <td>{{$value->enterSignal}}</td>
        <td>{{$value->trainCode}}</td>
        <td>{{$value->type}}</td>
        <td>{{$hour}} hour and {{$minute}} Minute</td>
      </tr>
    @endforeach
  </tbody>
</table>
<center>
  <button type="button"><a href="{{ URL::previous() }}">Back</a></button>
</center>
@endsection
