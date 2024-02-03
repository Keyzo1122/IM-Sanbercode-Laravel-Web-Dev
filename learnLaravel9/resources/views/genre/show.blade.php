@extends('layouts.master')

@section('judul')
Show Genre
@endsection

@section('content')
    <h2>Show Genre {{ $genre->id }}</h2>
    <h4>Nama Genre Adalah {{ $genre->name }}</h4>

    <a href="/genre" style="text-decoration: none;">
        <button type="button" class="btn btn-primary btn-sm">Back</button>
    </a>
@endsection
