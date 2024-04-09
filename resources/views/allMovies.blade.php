@extends('layouts/app')

<nav class="navbar">
    <a href="#" class="navbar-brand"><img id="logo" src="https://img.freepik.com/premium-vector/cinema-movie-logo-with-gradient-background-template_502990-937.jpg" alt=""></a>
    <ul class="navbar-nav my-display">
        <li class="nav-item">
            <a href="#" class="nav-link active">Film</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Serie</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Contatti</a>
        </li>
    </ul>
</nav>

<div class="container">
    <div class="row justify-content-center text-center">
        @foreach($movies as $movie)
            <div class="col-3 mb-4">
                <div class="card">
                    <img src="{{ $movie->image_url }}" class="card-img-top movie-image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->description }}</p>  
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Original Title: {{ $movie->original_title }}</li>
                        <li class="list-group-item">Nationality: {{ $movie->nationality }}</li>
                        <li class="list-group-item">Vote: {{ $movie->vote }}</li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
</div>