<!doctype html>
<html lang="en">
<head>
	{{ HTML::script('packages/jquery/jquery.min.js') }}
	{{ HTML::script('packages/bootstrap/js/bootstrap.min.js') }}
	{{ HTML::style('packages/bootstrap/css/bootstrap.min.css') }}
	<meta charset="UTF-8">
	<title>Retext</title>
	<style>
		body {
			margin:0;
			padding: 0;
			font-family:'Helvetica Neue Light', Helvetica, sans-serif;
			text-align:center;
			color: #999;
			background: whitesmoke;
		}
		#header {
			margin-bottom: 20px;
			padding-bottom: 20px;
			border-bottom: 1px solid whitesmoke;
		}
		#footer {
			margin-top: 20px;
			border-top: 1px solid whitesmoke;
		}
		#container {
			width: 800px;
			height: 100%;
			margin: 0 auto;
			background: white;
			padding: 20px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
		ul li {
			list-style-type: none;
		}
	</style>
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
						<a class="navbar-brand" href="#">Retext</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>{{ link_to('keywords', 'Keywords') }}</li>
							<li class="active">{{ link_to('users/list', 'Users') }}</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Link</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

		</div>

		@if (Session::get('flash_message'))
			<div class="flash">
				{{ Session::get('flash_message') }}
			</div>
		@endif

		@yield('content')

		<div id="footer">
			<p>This project was developed by <a href="http://davidangel.net/" target="_blank">David Angel</a>.</p>
		</div>
	</div><!-- /#container -->
</body>
</html>
