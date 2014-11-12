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
		<div class="container">
			<img src="/assets/img/logo.png" class="logo img-responsive">

			<form method="POST" action="">
	            <div class="form-group">
	                <input name="email" class="form-control" type="text" placeholder="Your E-mail">
	            </div>
	            <div class="form-group">
	                <div>
	                    <input name="password" type="password" class="form-control" placeholder="Password">
	                </div>
	            </div>
	            <div class="form-group">
	                <button type="submit" class="btn btn-block btn-info">Log in</button>
	            </div>
	        </form>
		</div>
	{{HTML::script('js/jquery-1.11.1.min.js')}}
	{{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/jasny-bootstrap.min.js')}}
    {{HTML::script('js/controller.js')}}
	</body>
</html>