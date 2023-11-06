@extends('layouts.app')
@section('content')

<div>
<form action={{route('entity.store')}} method='POST'>
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name='name' class="form-control" id="title" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="time">Time</label>
    <input type="number" name='time' class="form-control" id="time" placeholder="Time">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea type="text" name='description' class="form-control" id="description" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
    <label for="start_date">Start Date</label>
    <input type="date" name='start_date'  class="form-control" id="start_date" placeholder="Start Date">
  </div>
  <div class="form-group">
    <label for="finish_date">Finish Date</label>
    <input type="date" name='finish_date'  class="form-control" id="finish_date" placeholder="Finish Date">
  </div>
  <div class="form-group">
    <label for="Score">Score</label>
    <input type="number" name='score' class="form-control" id="score" placeholder="Score">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>

@endsection