@extends('layouts.master')

@section('judul')
Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>
<br><br>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Bio</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @forelse($cast as $key => $value)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->bio }}</td>
                <td>
                    <a href="/cast/{{ $value->id }}" class="btn btn-info btn-sm">Show</a>
                    <a href="/cast/{{ $value->id }}/edit" class="btn btn-info btn-sm">Edit</a>
                    <form action="/cast/{{ $value->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
                    </form>
                </td>
            </tr>
        @empty
            <tr colspan="3">
                <td>No Data</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
