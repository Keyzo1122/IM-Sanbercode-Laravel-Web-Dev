@extends('layouts.master')

@section('judul')
Show
@endsection

@section('content')
    <h2>Show Cast {{ $cast->id }}</h2>
    <h4>Nama Cast Adalah {{ $cast->name }}</h4>
    <h4>Umur Cast Adalah {{ $cast->age }}</h4>
    <p>{{ $cast->bio }}</p>

    <a href="/cast" style="text-decoration: none;">
        <button type="button" class="btn btn-primary btn-sm">Back</button>
    </a>
@endsection
