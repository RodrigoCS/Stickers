{{ Form::open(array('route' => 'sessions.store')) }}
	<div>
		{{ Form::label('email') }}
		{{ Form::text('email') }}
	</div>
	<div>
		{{ Form::label('password') }}
		{{ Form::password('password') }}
	</div>
	{{ Form::submit('Login') }}
{{ Form::close() }}