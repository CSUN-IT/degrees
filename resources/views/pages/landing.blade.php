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
			<h1>Degrees<br><span>Web Service</span></h1>
		</div>
		<div id="body-content">
			<div id="introduction" class="row">
				<h3>Introduction</h3>
				<p>The degrees API provides a web service as an interface for requesting information about a professor's degree and institutional background.
				This information is derived through CSUN's... The data is generated through a RESTful API by simply appending a name value pair at the end of a URI. 
				The web service uses HTTP requests to specific URL's and the service generally returns data as a JSON object and contains information including degree, year, and institution.</p>
				<div id="json-data">An example of JSON object returned: 
<pre class="language-json">
[
	{
	    "degree": "Ph.D.",
	    "discipline": null,
	    "year": "2008",
	    "institute": "University of California Los Angeles",
	    "location": null,
	    "latitude": null,
	    "longitude": null
	},
	{
	    "degree": "M.S.",
	    "discipline": null,
	    "year": "2003",
	    "institute": "University of California Los Angeles",
	    "location": null,
	    "latitude": null,
	    "longitude": null
	},
    {
	    "degree": "B.S.",
	    "discipline": null,
	    "year": "2000",
	    "institute": "University of California Los Angeles",
	    "location": null,
	    "latitude": null,
	    "longitude": null
    }
]</pre>
				</div>
			</div>
			<div id="how-to" class="row">
				<h3>How to use</h3>
				<p><span class="list-type">1</span>Generate a unique URI.<p>
				<p><span class="list-type">2</span>Use the constructed URI to perform to request data.</p>
				<p><span class="list-type">3</span>Browse through the returned JSON object and use as needed.</p>
				<p class="see-below"><span class="glyphicon glyphicon-menu-down"></span> See below for a quick walk through.</p>
				<dl>
					<dt>Take this URI for example:</dt>
					<dd>http://degrees.ptg.csun.edu/degrees?</dd>
					<dt>Append a professors email address as the value to the key 'person': </dt>
					<dd>person=steven.fitzgerald@csun.edu</dd>
					<dt>Use the generated URI as a query:</dt>
					<dd>http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu</dd>
					<dt>Now, take a look at the possible results of the URL:</dt>
					<dd>Using your language of choose you can now iterate over the JSON object and use as needed</dd>
				</dl>
				<dl>
					<dt>Examples of ready to use URL's: Click to see JSON Object</dt>
					<dd><a href="{{ url('degrees?person=steven.fitzgerald@csun.edu') }}">
						{{ url('degrees?person=steven.fitzgerald@csun.edu') }}</a>
					</dd>
					<dd><a href="{{ url('degrees?person=son.pham@csun.edu') }}">
						{{ url('degrees?person=son.pham@csun.edu') }}</a>
					</dd>
					<dd><a href="{{ url('degrees?person=rick.covington@csun.edu') }}">
						{{ url('degrees?person=rick.covington@csun.edu') }}</a>
					</dd>
				</dl>
			</div>
			<div id="examples" class="row">
				<h3>Code Examples</h3>
				<div id="code-panels">
					<ul class="nav nav-tabs">
						<li role="presentation" class="active"><a aria-controls="php" role="tab" data-toggle="tab" href="#php">PHP</a></li>
						<li role="presentation"><a aria-controls="javascript" role="tab" data-toggle="tab" href="#javascript">JavaScript</a></li>
						<li role="presentation"><a aria-controls="ruby" role="tab" data-toggle="tab" href="#ruby">Ruby</a></li>
						<li role="presentation"><a aria-controls="python" role="tab" data-toggle="tab" href="#python">Python</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="php">
<pre>
<code class="language-php">
$url = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu';

$data = file_get_contents($url);

$data = json_decode($data, true);

$degree_list = [];

foreach($data['degrees'] as $degree){
	$degree_list = $degree['degree']. '' . $degree['institute'];
}
</code>
</pre>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="javascript">
<pre>
<code class="language-javascript">
var url = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu';
$(document).ready(function() {

	$.get(url, function(data) {
		var degreeList = data.degrees;

		$(degreeList).each(function(index, degree) {

			$('#degree-results').append(degree.degree + ' ' + degree.institute);

		});
		
	});

});
</code>
</pre>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="ruby">
<pre>
<code class="language-ruby">
require 'net/http'
require 'json'

source = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu'

response = Net::HTTP.get_response(URI.parse(source))

data = response.body

#put the parsed data
puts JSON.parse(data)
</code>
</pre>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="python">
<pre>
<code class="language-python">
import urllib2
import json

url = u'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu'

try:
   u = urllib2.urlopen(url)
   data = u.read()
except Exception as e:
	data = {}

data = json.loads(data)

degrees_list = []

for course in data['degree']:
	degrees_list.append(degrees['degree'] + ' ' + degrees['institute'])

print degrees_list
</code>
</pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="{{ url('js/prism.js') }}"type="text/javascript"></script>
</html>
