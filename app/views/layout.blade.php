<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Retext</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			padding: 0;
			font-family:'Lato', sans-serif;
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
			width: 500px;
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
			<h1>Retext</h1>
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
