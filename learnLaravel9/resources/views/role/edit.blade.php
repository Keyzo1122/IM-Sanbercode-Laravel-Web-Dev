@extends('layouts.master')

@section('judul')
    Edit Role
@endsection

@section('content')
    <div>
        <h2>Edit Data</h2>
        <form action="/role/{{ $role->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Role</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}"
                    @error('content') is-invalid @enderror>
                @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label>Film</label>
                <select name="film_id" class="form-control" id="film_id" @error('film_id') is-invalid @enderror>
                    <option value="">--Silahkan Pilih Film--</option>
                    @forelse ($film as $item)
                        @if ($item->id === $role->film_id)
                            <option value="{{ $item->id }}" selected>{{ $item->title }}</option>
                        @endif
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
                <select name="cast_id" class="form-control" id="cast_id" @error('cast_id') is-invalid @enderror>
                    <option value="">--Silahkan Pilih Cast--</option>
                    @forelse ($cast as $item)
                        @if ($item->id === $role->cast_id)
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                        @endif
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
            <a href="/role" style="text-decoration: none;">
                <button type="submit" class="btn btn-info btn-sm">Back</button>
            </a>
            <button type="submit" class="btn btn-warning btn-sm my-2">Edit</button>
        </form>
    </div>
@endsection
