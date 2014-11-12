@extends('layout/main')

@section('message')
	<div class="container">
		<div>
			@if ($errors->has())
			
				@foreach ($errors->all() as $error)
					{{ $error }}		
				@endforeach
			
			@endif

  <h2 class="subheader">Friends</h2>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach (Auth::user()->friends as $friend)
      <tr>
          <td>{{ $friend->username }}</td>
          <td>{{ $friend->email }}</td>
          <td><a href="#">Remove friend</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
  <h2 class="subheader">Other People</h2>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($not_friends as $friend)
      <tr>
          <td>{{ $friend->username }}</td>
          <td>{{ $friend->email }}</td>
          <td><a href="#">Add friend</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
 
  <p class="right"><a href="/logout">Logout</a></p>
 
		</div>
	</div>
@stop
	