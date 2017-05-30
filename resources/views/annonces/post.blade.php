@extends('layouts.annonces')

@section('annonce')
	<form action="{{ route('post') }}" method="post">
		{{ csrf_field() }}
		<label>title</label>
		<input type="text" name="title" value="Titre ">
		<label>description</label>
		<textarea name="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla magni vitae rerum aliquam non tempora blanditiis et vel, fugit accusantium cumque perferendis repellat animi ut!</textarea>
		<button type="submit">Send</button>
	</form>

@endsection