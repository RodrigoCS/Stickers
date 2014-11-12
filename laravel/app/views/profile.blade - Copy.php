@extends('layout')

@section('message')
	<div>
		<p>Email {{Form::email('email', Auth::user()->email)}}</p>
		<p>Nombre {{Form::text('username', Auth::user()->username)}}</p>
	</div>
@stop
