@extends('layouts.master')

@section('title')
    Version History
@endsection

@section('content')
    <h2 id="introduction">Version History</h2>
    <h3 class="h5 padding">{{ env('APP_NAME') }} 1.0.0 <small>Release Date: 02/06/18</small></h3>
    <strong>Improvements:</strong>
    <ol>
        <li>Upgrade the underlying code base to the latest version.</li>
        <li>HTTPS can now be enforced at the application level.</li>
        <li>Include a version history.</li>
    </ol>
    <hr class="margin">
@endsection