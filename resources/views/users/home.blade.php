@extends('layouts.app')

@section('content')
<ul>
	@foreach ($users as $user)
		<li>
			{{$user->name}}
			{{$user->roles->implode('name')}}
		</li>
	@endforeach
</ul>
@endsection