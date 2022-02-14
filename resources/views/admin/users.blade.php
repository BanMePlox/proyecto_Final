@extends('layouts.layout')

@section('body')
<h1>Lista de usuarios</h1>
@foreach ($users as $user)
<p>{{$user->name}}</p>

@endforeach
@endsection
