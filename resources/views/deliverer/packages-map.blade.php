@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/deliverer/packagesmap.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/deliverer/packagesmap.js') }}"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('deliverer.google-maps-api-key') }}&callback=initMap" async defer></script>
@endsection

@section('content')
<div class="container">
    <div id="map"></div>
</div>
@endsection