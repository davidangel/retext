@extends('layout')
@section('content')

<h2>Create a new Keyword/Response</h2>

{{ Form::open(array('route' => 'keywords.store')) }}

<table class="table">
	<tr>
		<th>{{ Form::label('keyword', 'Keyword:') }}</th>
		<th>{{ Form::label('response', 'Response:') }}</th>
	</tr>
	<tr>
		<td>{{ Form::text('keyword', null, ['placeholder'=>'Keyword']) }}</td>
		<td>{{ Form::text('response', null,['placeholder'=>'Response']) }}</td>
	</tr>
	<tr>
		<td colspan="3">
		{{ Form::submit('Create') }}
		</td>
	</tr>

</table>

{{ Form::close() }}

@stop