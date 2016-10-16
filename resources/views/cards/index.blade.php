@extends('layout')


@section('content')
	@foreach( $cards as $card )
		<div>{{$card->title}}</div>
	@endforeach
@stop