@extends('layouts.annonces')

@section('annonce')
	<h2>{{$annonce->title}}</h2>
	<p>{{$annonce->desc}}</p>
@endsection