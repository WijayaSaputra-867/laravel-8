@extends('layouts.main')
@section('content')
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="{{ asset($img) }}" alt="{{ $name }}" class="img-thumbnail rounded-circle" width="200" height="200">
@endsection