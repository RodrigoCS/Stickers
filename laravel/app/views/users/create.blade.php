{{ Form::open() }}
	<div>
		{{ Form::label('email') }}
		{{ Form::text('email') }}
	</div>
	<div>
		{{ Form::label('Username') }}
		{{ Form::text('username') }}
	</div>
	<div>
		{{ Form::label('password') }}
		{{ Form::password('password') }}
	</div>
	{{ Form::submit('Register') }}
{{ Form::close() }}