@extends('layout')
@section('content')

<h2>Update Keyword/Response</h2>

{{ Form::model($keyword, array('route' => array('keywords.update', $keyword->id), 'method' => 'PUT')) }}

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
			{{ Form::submit('Save') }}
		</td>
	</tr>

</table>

{{ Form::close() }}

@stop