@extends('layouts.layout')

@section('body')
<h1>Lista de usuarios</h1>
@foreach ($users as $user)
<h2>{{$user->name}}</h2>
<p>{{$user->id}}</p>
<p>{{$user->address}}</p>
<p>{{$user->nif}}</p>
<hr>
@endforeach
@endsection
