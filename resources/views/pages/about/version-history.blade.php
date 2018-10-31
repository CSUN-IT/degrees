@extends('layouts.master')

@section('title')
    Version History
@endsection

@section('description')
    {{ env('APP_NAME') }} Web Service Version History
@endsection

@section('content')
    <div class="version-history">
        <h2>Version History</h2>
        <h3>{{ env('APP_NAME') }} 1.1.0 <small>Release Date: 10/23/18</small></h3>
        <strong>Improvements:</strong>
        <ol>
            <li>Update the landing pages to include the latest version of <a href="//csun-metalab.github.io/metaphorV2/">Metaphor</a>.</li>
        </ol>
        <h3>{{ env('APP_NAME') }} 1.0.0 <small>Release Date: 02/06/18</small></h3>
        <strong>Improvements:</strong>
        <ol>
            <li>Upgrade the underlying code base to the latest version.</li>
            <li>HTTPS can now be enforced at the application level.</li>
            <li>Include a version history.</li>
        </ol>
    </div>
@endsection