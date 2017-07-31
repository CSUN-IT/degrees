<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>Degrees Web Service</title>
	<link rel="icon" type="image/png" href="favicon.png">
	<link rel="icon" type="image/x-icon" href="favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="//use.typekit.net/gfb2mjm.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.metalab.csun.edu/metaphor/css/metaphor.css">
	<link rel="stylesheet" type="text/css" href="{{ url('css/tomorrow.min.css') }}">
</head>
<body>
	<div class="section section--sm">
		<div class="container type--center">
			<h1 class="giga type--thin">Degrees Web Service</h1>
			<h3 class="h1 type--thin type--gray">Delivering Degree information about CSUN Faculty</h3>
		</div>
	</div>
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					@include('layouts.partials.side-nav')
				</div>
				<div class="col-md-9">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	{{-- @include('layouts.partials.csun-footer') --}}
	@include('layouts.partials.metalab-footer')
	<script type="text/javascript" src="//cdn.metalab.csun.edu/metaphor/js/metaphor.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>
