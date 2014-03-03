<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retext</title>

	{{ HTML::script('packages/jquery/jquery.min.js') }}
	{{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::script('js/main.js') }}
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	{{ HTML::style('css/styles.css') }}

</head>
<body>
	<div id="container">
		<div id="header">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ route('home') }}">Retext</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						@if (Auth::guest())

						@else
						<ul class="nav navbar-nav">
							<li>{{ link_to('keywords', 'Keywords') }}</li>
							<li>{{ link_to('users', 'Users') }}</li>
						</ul>
						@endif

						<ul class="nav navbar-nav navbar-right">
									@if (Auth::guest())
									<li>{{ link_to('/login', 'Log In') }}</li>
									@else
									<li>{{ link_to('/logout', 'Log Out') }}</li>
									@endif
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

		</div>

		@if (Session::get('flash_message'))
			<div class="flash alert alert-info alert-dismissable">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				{{ Session::get('flash_message') }}
			</div>
		@endif
		<div id="content">
		@yield('content')
		</div>

		<div id="footer">
			<p>This project was developed by <a href="http://davidangel.net/" target="_blank">David Angel</a>.</p>
		</div>
	</div><!-- /#container -->
</body>
</html>
