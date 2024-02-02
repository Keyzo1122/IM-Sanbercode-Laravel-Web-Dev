@extends('layouts.master')

@section('judul')
    Edit
@endsection

@section('content')
    <div>
        <h2>Edit Cast {{ $cast->name }}</h2>
        <form action="/cast/{{ $cast->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $cast->name }}" id="name"
                    placeholder="Input Name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="text" class="form-control" name="age" value="{{ $cast->age }}" id="age"
                    placeholder="Input Age">
                @error('age')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio">Bio</label>
                <input type="text" class="form-control" name="bio" value="{{ $cast->bio }}" id="bio"
                    placeholder="Input Bio">
                @error('bio')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <a href="/cast">
                <button type="button" class="btn btn-primary btn-sm">Kembali</button>
            </a>
            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
        </form>
    </div>
@endsection
