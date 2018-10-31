@extends('layouts.master')

@section('title')
    Documentation
@endsection

@section('description')
    {{ env('APP_NAME') }} Web Service Landing Page
@endsection

@section('content')
    <h2 id="introduction">Introduction</h2>
    The {{ env('APP_NAME') }} web service provides a web service as an interface for requesting information about a professor's degree and institutional background.
    This information is derived through CSUN's catalog. The data is generated through a RESTful API by simply appending a name value pair at the end of a URI.
    The web service uses HTTP requests to specific URL's and the service returns data in a form of JSON object that contains information including degree, year, and institution.
    <strong>An example of JSON object returned:</strong>
    <pre class="prettyprint">
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
    <h2 id="how-to-use">How to use</h2>
    <div class="card">
        <div class="card-body">
            <ol>
                <li><strong>GENERATE A UNIQUE URI:</strong> Find the usage that fits your need. Browse through subcollections, instances and query types to help you craft your URI.</li>
                <li><strong>PROVIDE THE DATA:</strong> Use the constructed URI to send a query request  - See the Usage Example section.</li>
                <li><strong>SHOW THE RESULTS</strong>Loop through the returned JSON Object to display the information. - See the Usage Example section below.</li>
            </ol>
        </div>
    </div>

    <strong>Take this URI for example:</strong>
    <div class="card">
        <div class="card-body">
            {!! url('api/degrees?') !!}
        </div>
    </div>

    <strong>Append a professor's email address as the value to the key 'person': </strong>
    <div class="card">
        <div class="card-body">
            person={{$emails['steve']}}
        </div>
    </div>

    <strong>Use the generated URL as a query:</strong>
    <div class="card">
        <div class="card-body">
            {!! url('api/degrees?person='.$emails['steve']) !!}
        </div>
    </div>
    <strong>Examples of ready to use URL's: Click to see JSON Object</strong>
    <ul>
        <li>
            <a href="{{ url('api/degrees?person='.$emails['steve']) }}">
                {!! url('api/degrees?person='.$emails['steve']) !!}</a>
        </li>
        <li>
            <a href="{{ url('api/degrees?person='.$emails['son']) }}">
                {!! url('api/degrees?person='.$emails['son']) !!}</a>
        </li>
        <li>
            <a href="{{ url('api/degrees?person='.$emails['rick']) }}">
                {!! url('api/degrees?person='.$emails['rick']) !!}</a>
        </li>
    </ul>
    <h2 id="code-samples">Code Samples</h2>
    <div class="accordion">
        <div class="card">
            <div id="jquery-header" class="card-header">
                <p class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#jquery-body" aria-expanded="true" aria-controls="jquery-body">
                        JQuery
                    </button>
                </p>
            </div>
            <div id="jquery-body" class="collapse" aria-labelledby="jquery-header">
                <div class="card-body">
                    <pre>
                        <code class="prettyprint lang-js">
//construct a function to get url and iterate over
$(document).ready(function() {
    //generate a url
    var url = '{!! url('api/degrees/degrees?person='.$emails['steve']) !!}';
    //use the URL as a request
    $.ajax({
        url: url
    }).done(function(data) {
        // save the degree list
        var degreeList = data.degrees;
        //iterate over the degree list
        $(degreeList).each(function(index, degree) {
            //append each degree and institute
            $('#degree-results').append(degree.degree + ' ' + degree.institute + '&lt;br&gt;');
        });
    });
});
                        </code>
                    </pre>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="php-header" class="card-header">
                <p class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#php-body" aria-expanded="true" aria-controls="php-body">
                        PHP
                    </button>
                </p>
            </div>
            <div id="php-body" class="collapse" aria-labelledby="php-header">
                <div class="card-body">
                    <pre>
                        <code class="prettyprint lang-php">
//generate a url
$url = '{!! url('api/degrees/degrees?person='.$emails['steve']) !!}';

//add extra necessary options
$arrContextOptions = [
    "ssl" => [
        "verify_peer"=>false,
        "verify_peer_name"=>false
    ]
];

//perform the query
$data = file_get_contents($url, false, stream_context_create($arrContextOptions));

//decode the json
$data = json_decode($data, true);

//iterate over the list of data and print
foreach($data['degrees'] as $degree){
    echo = $degree['degree'] . ' ' . $degree['institute'].'&lt;br&gt;';
}
                        </code>
                    </pre>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="python-header" class="card-header">
                <p class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#python-body" aria-expanded="true" aria-controls="python-body">
                        Python
                    </button>
                </p>
            </div>
            <div id="python-body" class="collapse" aria-labelledby="python-header">
                <div class="card-body">
                    <pre>
                        <code class="prettyprint language-py">
#python
import urllib2
import json

#generate a url
url = u'{!! url('api/degrees/degrees?person='.$emails['steve']) !!}'

#open the url
try:
    u = urllib2.urlopen(url)
    data = u.read()
except Exception as e:
    data = {}

#load data with json object
data = json.loads(data)

#iterate over the json object and print
for degree in data['degrees']:
    print degrees['degree'] + ' ' + degrees['institute']
                        </code>
                    </pre>
                </div>
            </div>
        </div>
        <div class="card">
            <div id="ruby-header" class="card-header">
                <p class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ruby-body" aria-expanded="true" aria-controls="ruby-body">
                        Ruby
                    </button>
                </p>
            </div>
            <div id="ruby-body" class="collapse" aria-labelledby="ruby-header">
                <div class="card-body">
                    <pre>
                        <code class="prettyprint lang-rb">
require 'net/http'
require 'json'

#generate a url
source = '{!! url('api/degrees/degrees?person='.$emails['steve']) !!}'

#prepare the uri
uri = URI.parse(source)

#request the data
response = Net::HTTP.get(uri)

#parse the json
degrees = JSON.parse(response)

#print the json
degrees['degrees'].each do |degree|
    puts "#{degree['degree']} #{degree['institute']}"
                        </code>
                    </pre>
                </div>
            </div>
        </div>
    </div>
@endsection
