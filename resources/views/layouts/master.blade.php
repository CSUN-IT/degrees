<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" content="width=device-width, initial-scale=1">
	<title>{{ env('APP_NAME') }} Web Service | @yield('title')</title>
	<link rel="icon" href="//www.csun.edu/sites/default/themes/csun/favicon.ico" type="image/x-icon"/>
	<script type="text/javascript" src="//use.typekit.net/gfb2mjm.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic">
	<link rel="stylesheet" type="text/css" href="{{ url('css/metaphor.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/tomorrow.css.min') }}">
</head>
<body>
	<div class="section section--sm">
		<div class="container type--center">
			<h1 class="giga type--thin">{{ env('APP_NAME') }} Web Service</h1>
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
	 @include('layouts.partials.csun-footer')
	@include('layouts.partials.metalab-footer')
	<script type="text/javascript" src="{{ url('js/metaphor.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/run_prettify.js') }}"></script>
	<!--
      __  __   ___   _____     _
     |  \/  | | __| |_   _|   /_\       Explore Learn Go Beyond
     | |\/| | | _|    | |    / _ \      https://www.metalab.csun.edu/
     |_|  |_| |___|   |_|   /_/ \_\
        _       _        _     ___
      _| |_    | |      /_\   | _ )
     |_   _|   | |__   / _ \  | _ \
       |_|     |____| /_/ \_\ |___/
    -->
</body>
</html>