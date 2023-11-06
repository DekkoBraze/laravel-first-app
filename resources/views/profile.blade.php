@extends('layouts.app')
@section('content')

<div>
<h1>{{$user->name}}</h1>
<h2>{{$user->status}}</h2>
<p>{{$user->description}}</p>
<a href={{route('entity.index')}}>Все медиа</a>
</div>

@endsection