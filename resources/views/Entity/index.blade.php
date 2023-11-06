@extends('layouts.app')
@section('content')

@foreach ($entities as $entity)
<h1>{{$entity->name}}</h1>
<h2>{{$entity->time}}</h2>
<h5>{{$entity->start_date}}</h5>
<h5>{{$entity->finish_date}}</h5>
<p>{{$entity->description}}</p>
<br>
<h1>{{$entity->score}}</h1>
<h1>------------------</h1>
@endforeach

<a href={{route('entity.create')}}>Добавить медиа</a>

@endsection
