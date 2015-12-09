<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>Degrees Web Service</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{ url('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/prism.css')}}">
</head>
<body>
	<div class="container">
		<div id="page-header" class="row">
			<h1>Degrees<br><span>Web Service&nbsp;</span></h1>
		</div>
		<div id="body-content">
			<div id="introduction" class="row">
				<h3>Introduction</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p id="json-data">
					<pre class="language-json pull-right">
[
	{
		"degree":"Ph.D.",
		"year":1995,
		"institute":"University of Massaschusetts","
	},
	{
		"degree":"M.S.",
		"year":1990,
		"institute":"University of Massaschusetts",
	{
		"degree":"B.S.",
		"year":1986,
		"institute":"Lowell University",
	}
]
					</pre>
				</p>
			</div>
			<div id="how-to" class="row">
				<h3>How to</h3>
				<ol>
					<li></li>
					<li></li>
					<li></li>
				</ol>
			</div>
			<div id="example" class="row">
				<h3>Examples</h3>
				<dl>
					<dt>Get all degrees for an individual</dt>
					<dd><a href="{{ url('degrees?person=steven.fitzgerald@csun.edu') }}">
						{{ url('degrees?person=steven.fitzgerald@csun.edu') }}</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ url('js/prism.js') }}"type="text/javascript"></script>
</html>
