@extends('layouts.master')

@section('judul')
    Create Role
@endsection

@section('content')
    <div>
        <h2>Add Data</h2>
        <form action="/role" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Role</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Input Name">
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="film_id">Film</label>
                <select name="film_id" class="form-control" id="">
                    <option value="">--Silahkan Pilih Film--</option>
                            @forelse ($film as $item)
                    <option value="{{ $item->id }}">{{ $item->title }}</option>
                @empty
                    <option value="">Tidak Ada Film</option>
                    @endforelse
                </select>
                @error('film_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cast_id">Cast</label>
                <select name="cast_id" class="form-control" id="">
                    <option value="">--Silahkan Pilih Cast--</option>
                            @forelse ($cast as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @empty
                    <option value="">Tidak Ada Cast</option>
                    @endforelse
                </select>
                @error('cast_id')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-sm my-2">Create</button>
            <a href="/genre" style="text-decoration: none;">
                <button type="button" class="btn btn-warning btn-sm">Back</button>
            </a>
        </form>
    </div>
@endsection
