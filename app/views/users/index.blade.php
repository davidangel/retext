@extends('layout')
@section('content')

<table class="table table-striped">
	<tr><th>Keyword</th><th>Response</th><th>Modify</th></tr>
	@foreach ($keywords as $keyword)
	<tr>
		<td>{{ $keyword->keyword }}</td>
		<td>{{ $keyword->response }}</td>
		<td>
			{{ Form::open(array('route' => array('keywords.destroy', $keyword->id), 'method' => 'delete')) }}
			<button type="submit" href="{{ URL::route('keywords.destroy', $keyword->id) }}" class="btn btn-danger btn-mini">Delete</button>
			{{ Form::close() }}
			{{ Form::open(array('route' => array('keywords.edit', $keyword->id), 'method' => 'get')) }}
			<a href="{{ URL::route('keywords.edit', $keyword->id) }}" class="btn btn-warning btn-mini">Edit</a>
			{{ Form::close() }}
		</td>
	</tr>
	@endforeach
</table>

<a href="{{ URL::route('keywords.create') }}" class="btn btn-success btn-mini">Create New</a>

@stop