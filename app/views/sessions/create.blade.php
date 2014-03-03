@extends('layout')
@section('content')
<div id="login-form">
<h2>Login</h2>

{{ Form::open(array('route' => 'sessions.store')) }}

		{{ Form::label('username', 'Username:') }}
		{{ Form::text('username') }}

		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password') }}

		{{ Form::submit() }}


{{ Form::close() }}

</div>

@stop