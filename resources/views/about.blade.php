@extends('layouts.app')
@section('content')

<h1>Добро пожаловать на MyUniverse!</h1>
<h2>Здесь вы сможете оценивать все, что угодно, и делиться своими достижениями с друзьями!</h2>
<a href="{{ route('to_homepage') }}">Войти в свою вселенную</a>

@endsection