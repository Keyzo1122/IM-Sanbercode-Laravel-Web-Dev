@extends('layouts.master')

@section('judul')
    Genre
@endsection

@section('content')
    <a href="/genre/create" class="btn btn-primary btn-sm">Add New</a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($genre as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        <a href="/genre/{{ $value->id }}" class="btn btn-info btn-sm"  style="display: inline;">Show</a>
                        <a href="/genre/{{ $value->id }}/edit" class="btn btn-warning btn-sm" style="display: inline;">Edit</a>
                        <form action="/genre/{{ $value->id }}" method="POST" style="display: inline;">
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
