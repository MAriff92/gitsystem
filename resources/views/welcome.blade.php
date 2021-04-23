@extends('layouts.app')

@section('content')

<!-- Styles -->
<link href="{{ asset('css/custombanner.css') }}" rel="stylesheet">


<div class="container-fluid">
    <div class="row">
        <div class="imgcontainer">
            <img width="100%" src="{{ URL::asset('img/transwater-ho.jpg') }}" alt="Avatar" class="image">
            <div class="overlay">
                <div class="figcaption"><a href="{{ route('home') }}" class=" btn btn-lg btn-dark">Explore the system</a></div>
            </div>
        </div>
    </div>
</div>

@endsection
