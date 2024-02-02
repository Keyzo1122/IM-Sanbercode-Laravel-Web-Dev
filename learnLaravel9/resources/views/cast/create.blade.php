@extends('layouts.master')

@section('judul')
Create
@endsection

@section('content')
<div>
    <h2>Add Data</h2>
    <form action="/cast" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Input Name">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" placeholder="Input Age">
            @error('age')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
            <input type="text" class="form-control" name="bio" id="bio" placeholder="Input Bio">
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Create</button>
    </form>
</div>
@endsection
