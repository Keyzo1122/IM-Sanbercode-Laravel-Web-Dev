@extends('layouts.master')

@section('judul')
    Show Role
@endsection

@section('content')
<h3>
    {{ $role->cast_id }} berperan sebagai {{ $role->name }} dalam Film {{ $role->film_id }}
</h3>
@endsection
