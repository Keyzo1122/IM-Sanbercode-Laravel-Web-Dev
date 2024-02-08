@extends('layouts.master')

@section('judul')
    Role
@endsection

@section('content')
    @auth
        <a href="/role/create" class="btn btn-primary btn-sm">Add New Role</a>
    @endauth
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse($role as $key => $value)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>
                        <a href="/role/{{ $value->id }}" class="btn btn-info btn-sm" style="display: inline;">Show</a>
                        @auth
                            <a href="/role/{{ $value->id }}/edit" class="btn btn-warning btn-sm"
                                style="display: inline;">Edit</a>
                            <form action="/role/{{ $value->id }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm my-1" value="Delete">
                            </form>
                        @endauth
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
