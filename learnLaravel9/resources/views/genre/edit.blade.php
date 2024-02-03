@extends('layouts.master')

@section('judul')
    Edit Genre
@endsection

@section('content')
    <div>
        <h2>Edit Genre {{ $genre->name }}</h2>
        <form action="/genre/{{ $genre->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $genre->name }}" id="name"
                    placeholder="Input Name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/genre" style="text-decoration: none;">
                <button type="button" class="btn btn-primary btn-sm">Back</button>
            </a>
            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
        </form>
    </div>
@endsection
