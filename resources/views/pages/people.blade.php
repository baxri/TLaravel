@extends('layout')


@section('content')

	@if( !empty( $people ) )
		
		<ul>
		@foreach ($people as $key => $value) 
			<li>{{$value}}</li>
		@endforeach
		</ul>

	@else
		There is no people
	@endif

@stop

