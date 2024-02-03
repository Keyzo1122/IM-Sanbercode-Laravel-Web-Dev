@extends('layouts.master')

@section('judul')
    Create Genre
@endsection

@section('content')
    <div>
        <h2>Add Data</h2>
        <form action="/genre" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Input Name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Create</button>
            <a href="/genre" style="text-decoration: none;">
                <button type="button" class="btn btn-warning btn-sm">Back</button>
            </a>
        </form>
    </div>
@endsection
