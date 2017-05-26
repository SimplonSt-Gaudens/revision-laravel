@extends('layouts.app')

@section('content')

	<h1>{{$user->name}}</h1>
	<span>{{$user->roles->implode('name')}}</span>

@endsection