@extends('layouts.master')

@section('judul')
    Edit Film
@endsection

@section('content')
    <div>
        <h2>Edit Data</h2>
        <form action="/film/{{ $film->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value="{{ $film->title }}" name="title" id="title" placeholder="Input Title">
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="summary">Summary</label>
                <input type="text" class="form-control" value="{{ $film->summary }}" name="summary" id="summary" placeholder="Input Summary">
                @error('summary')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="year">Year</label>
                <input type="number" class="form-control" value="{{ $film->year }}" name="year" id="year" placeholder="Input Year">
                @error('year')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="poster">Poster</label>
                <input type="file" class="form-control" name="poster" id="poster" placeholder="Input Poster">
                @error('poster')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="genre">Genre</label>
                <select name="genre_id" class="form-control" id="">
                    <option value="">--Silahkan Pilih Genre--</option>
                    @forelse ($genre as $item)
                        @if ($item->id === $film->genre_id)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endif
                    @empty
                        <option value="">Tidak Ada Genre</option>
                    @endforelse
                </select>
            </div>
            <button type="submit" class="btn btn-warning btn-sm">Update</button>
            <a href="/film" style="text-decoration: none;">
                <button type="button" class="btn btn-primary btn-sm">Back</button>
            </a>
        </form>
    </div>
@endsection
