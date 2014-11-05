<!DOCTYPE html>
<html>
	<head>
		<title>
			@yield('title')
		</title>
		{{HTML::style('css/bootstrap.css')}}
		{{HTML::style('css/custom/main.css')}}
    {{HTML::style('css/jasny-bootstrap.min.css')}}
	</head>
	<body>
    <nav id="myNavmenu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
      <div class="logo-side">
        <img src="/assets/img/logo.png" class="img-responsive">
      </div>  
      <img src="/public/pictures/{{Auth::user()->picture}}" alt="..." class="img-circle">
      <a class="navmenu-username" href="#">{{Auth::user()->username}}</a>
      <ul class="nav navmenu-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/profile">My Profile</a></li>
        <li><a href="/logout">Logout</a></li>
      </ul>
    </nav>
    <div class="navbar navbar-default navbar-fixed-top">
      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
		<div class="content">
			@yield('content')
		</div>
	
		{{HTML::script('js/jquery-1.11.1.min.js')}}
		{{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/jasny-bootstrap.min.js')}}
    {{HTML::script('js/controller.js')}}
  </body>
</html>