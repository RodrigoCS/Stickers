@extends('layout/main')

@section('content')
	<div class="container">
	<div class="panel panel-default">
		  <div class="panel-body">
		  <div class="container">
			@if ($errors->has())
			
				@foreach ($errors->all() as $error)
					{{ $error }}		
				@endforeach
			
			@endif
			<p>
				{{Form::open(array('action' => 'UsersController@updateUsername'))}}
				{{Form::Label('Nombre:'), Form::text('username', Auth::user()->username, array(
	    			'disabled' => 'disabled',
	    			'id'    => 'profile_name',
	    			'class' => 'form-control'
    			))}}
    			<button type="button" id="profile_name_edit" class="btn btn-default btn-xs">EDIT</button>
    			<button type="submit" display="none" id="profile_name_submit" class="btn btn-success btn-xs">OK</button>
    			{{Form::close()}}
    		</p>
			<p>
				{{Form::open(array('action' => 'UsersController@updatePassword'))}}
				{{Form::Label('Current Password:')}}
				{{Form::text('password', '********', array(
	    			'disabled' => 'disabled',
	    			'id'    => 'profile_password',
	    			'class' => 'form-control'
    			))}}
    			<button type="button" id="profile_password_edit" class="btn btn-default btn-xs">EDIT</button>
    		</p>
    			{{Form::Label('New Password', '', array('id' => 'profile_password_new_label'))}}
    			{{Form::text('password_new', '', array(
	    			'id'    => 'profile_password_new'
    			))}}
    		<p>
    			{{Form::Label('Confirm new Password', '', array('id' => 'profile_password_confirm_label'))}}
    			{{Form::text('password_new_confirmation', '', array(
	    			'id'    => 'profile_password_confirm'
    			))}}

    		</p>
    		<button type="submit" display="none" id="profile_password_submit" class="btn btn-success btn-xs">OK</button>
    			{{Form::close()}}
			<p>Profile Picture: <img src="/public/pictures/{{Auth::user()->picture}}"></p>
			<button class="btn btn-default">Cambiar Imagen</button>
			{{Input::get('loginMessage') or "Default Message"}}
		</div>
	</div>
	</div>
	</div>
@stop
	