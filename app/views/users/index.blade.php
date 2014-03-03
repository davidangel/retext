@extends('layout')
@section('content')

<h1>All Users</h1>

<p>{{ link_to_route('users.create', 'Add new user') }}</p>

@if ($users->count())
	<table class="table table-striped table-bordered">
			<tr>
				<th>Username</th>
				<th>Email</th>
				<th colspan="2">Modify</th>
			</tr>

			@foreach ($users as $user)
				<tr>
					<td>{{{ $user->username }}}</td>
					<td>{{{ $user->email }}}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}

						{{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'btn btn-warning')) }}
                    </td>
				</tr>
			@endforeach
	</table>
@else
	There are no users
@endif

{{ link_to_route('users.create', 'Add New User', null, ['class'=>'btn btn-success btn-mini']) }}

@stop
