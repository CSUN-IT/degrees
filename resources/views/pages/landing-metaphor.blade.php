@extends('layouts.master')
@section('content')
	<h2 id="intruduction" class="type--header type--thin">Introduction</h2>
	The degrees API provides a web service as an interface for requesting information about a professor's degree and institutional background.
	This information is derived through CSUN's catalog. The data is generated through a RESTful API by simply appending a name value pair at the end of a URI. 
	The web service uses HTTP requests to specific URL's and the service returns data in a form of JSON object that contains information including degree, year, and institution.
	<strong>An example of JSON object returned:</strong>
	<pre>
		<code>
{
	appt_year: "1994",
	degrees: [
	{
		"degree": "Ph.D.",
		"year": "2008",
		"institute": "University of California Los Angeles",
	},
	{
		"degree": "M.S.",
		"year": "2003",
		"institute": "University of California Los Angeles",
	},
	{
		"degree": "B.S.",
		"year": "2000",
		"institute": "University of California Los Angeles",
	}
	]
}
						</code>
					</pre>
					<h2 id="how-to-use" class="type--header type--thin">How to use</h2>
					<ol>
						<li><strong>GENERATE A UNIQUE URI:</strong> Find the usage that fits your need. Browse through subcollections, instances and query types to help you craft your URI.</li>
						<li><strong>PROVIDE THE DATA:</strong> Use the constructed URI to send a query request  - See the Usage Example section.</li>
						<li><strong>SHOW THE RESULTS</strong>Loop through the returned JSON Object to display the information. - See the Usage Example section below.</li>
					</ol>
					<strong>Take this URI for example:</strong>
					<div class="panel">
						<div class="panel__content">
						http://degrees.ptg.csun.edu/degrees?
						</div>
					</div>

					<strong>Append a professor's email address as the value to the key 'person': </strong>
					<div class="panel">
						<div class="panel__content">
						person=steven.fitzgerald@csun.edu
						</div>
					</div>

					<strong>Use the generated URL as a query:</strong>
					<div class="panel">
						<div class="panel__content">
						http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu
						</div>
					</div>

					<strong>Now, take a look at the possible results of query:</strong>
					<div class="panel">
						<div class="panel__content">
						Using your language of choice, you can now iterate over the JSON object and use as needed
						</div>
					</div>
						<strong>Examples of ready to use URL's: Click to see JSON Object</strong>
						<ul class="list">
							<li class="list__item">
								<a href="{{ url('degrees?person=steven.fitzgerald@csun.edu') }}">
									{{ url('degrees?person=steven.fitzgerald@csun.edu') }}</a>
							</li>
							<li class="list__item">
								<a href="{{ url('degrees?person=son.pham@csun.edu') }}">
									{{ url('degrees?person=son.pham@csun.edu') }}</a>
							</li>
							<li class="list__item">
								<a href="{{ url('degrees?person=rick.covington@csun.edu') }}">
									{{ url('degrees?person=rick.covington@csun.edu') }}</a>
							</li>
						</ul>
					<h2 id="code-examples" class="type--header type--thin">Code Examples</h2>
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
//generate a url
$url = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu';

//perform the query
$data = file_get_contents($url);

//decode the json
$data = json_decode($data, true);

//instantiate an empty array
$degree_list = [];

//iterate over the list of data 
foreach($data['degrees'] as $degree){
		 $degree_list[] = $degree['degree'] . ' ' . $degree['institute'];
}
									</code>
								</pre>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="javascript">
								<pre>
									<code class="language-javascript">
//generate a url
var url = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu';

//construct a function to get url and iterate over 
$(document).ready(function() {

	//use the URL as a request
	$.get(url, function(data) {

		var degreeList = data.degrees;
		//iterate over the degree list
		$(degreeList).each(function(index, degree) {
					
			//append each degree and institute
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

#generate a url
source = 'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu'

#request the data
response = Net::HTTP.get_response(URI.parse(source))

#store the response in data variable
data = response.body

#put the parsed data
puts JSON.parse(data)
									</code>
								</pre>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="python">
								<pre>
									<code class="language-python">
#python
import urllib2
import json

#generate a url
url = u'http://degrees.ptg.csun.edu/degrees?person=steven.fitzgerald@csun.edu'

#open the url 
try:
	 u = urllib2.urlopen(url)
	 data = u.read()
except Exception as e:
	data = {}

#load data with json object
data = json.loads(data)

degrees_list = []

#iterate over the json object and add to the degrees list
for degree in data['degrees']:
		 degrees_list.append(degrees['degree'] + ' ' + degrees['institute'])

print degrees_list
								</code>
			</pre>
		</div>
	</div>
</div>
@stop
