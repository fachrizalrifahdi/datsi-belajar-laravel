@extends('layouts.public')
@section('title', 'Halaman Awal')
@section('content')
    <h1>Halaman Awal</h1>
    <a href="{{ url('/barang') }}" class="btn btn-primary">Barang</a>
@endsection
