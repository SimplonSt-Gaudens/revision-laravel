@extends('layouts.annonces')

@section('annonce')
	<ul>
		@foreach ($annonces as $annonce)
			<li>
				<h1><a href="/annonce/{{$annonce->id}}">{{$annonce->title}}</a></h1>
			</li>
		@endforeach
	</ul>
@endsection