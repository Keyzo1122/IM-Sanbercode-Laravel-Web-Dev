@extends('layouts.master')

@section('judul')
Show Genre
@endsection

@section('content')
    <h2>Show Genre {{ $genre->id }}</h2>
    <br>
    <h4>Genre ini Adalah {{ $genre->name }}</h4>
    <br>
    <a href="/genre" style="text-decoration: none;">
        <button type="button" class="btn btn-primary btn-sm">Back</button>
    </a>
@endsection
