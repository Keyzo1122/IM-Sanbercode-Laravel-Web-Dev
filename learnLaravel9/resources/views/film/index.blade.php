@extends('layouts.master')

@section('judul')
    List Film
@endsection

@section('content')
    @auth
    <a href="/film/create" class="btn btn-primary btn-sm">Add New Film</a>
    @endauth
    <br><br>

    <div class="row">
        @forelse ($film as $item)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('image/' . $item->poster) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>{{ $item->title }}</h5>
                        <p class="card-text">{{ Str::limit($item->summary, 100) }}</p>
                        <a href="/film/{{ $item->id }}" class="btn btn-primary d-flex justify-content-center">Read
                            More</a>
                        @auth
                        <div class="row my-2">
                            <div class="col">
                                <a href="/film/{{ $item->id }}/edit" class="btn btn-warning btn-sm btn-block">Edit</a>
                            </div>
                            <div class="col">
                                <form action="/film/{{ $item->id }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger btn-sm btn-block" value="Delete">
                                </form>
                            </div>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection
