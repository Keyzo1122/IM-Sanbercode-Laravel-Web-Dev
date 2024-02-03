@extends('layouts.master')

@section('judul')
    Detail Film
@endsection

@section('content')
    <img src="{{ asset('image/' . $film->poster) }}" class="card-img-top" alt="...">
    <h5>{{ $film->title }}</h5>
    <p class="card-text">{{ $film->summary }}</p>
    <a href="/film" class="btn btn-primary d-flex justify-content-center">Back</a>
@endsection
