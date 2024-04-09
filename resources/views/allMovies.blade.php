@extends('layouts/app')

<div class="">

    @foreach($movies as $movie)
        {{$movie->title}}<br>
    @endforeach
    
</div>