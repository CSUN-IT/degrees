<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Degrees Web Service</title>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			color: #999;
			font-size:14px;
		}

		.welcome {
			position: absolute;
			left: 10px;
			top: 10px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			margin: 16px 0 0 0;
		}

		dl {width:600px;}
		dt {font-weight:bold;font-size:16px;margin-top:20px;}
		dd {margin:0;font-weight:normal;}
	</style>
</head>
<body>
	<div class="welcome">
		<h1>Degrees Web Service</h1>

		<h2>Examples</h2>
		<dl>
			<dt>Get all degrees for an individual</dt>
			<dd><a href="{{ url('degrees?person=steven.fitzgerald@csun.edu') }}">
				{{ url('degrees?person=steven.fitzgerald@csun.edu') }}
			</a></dd>
		</dl>
	</div>
</body>
</html>
