@extends('layouts.public')
@section('title', 'Lihat Barang')
@section('judul', 'Lihat Barang')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-danger" href="{{ url('/barang') }}">Kembali</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nama Barang</td>
                            <td>{{ $barang->nama_barang }}</td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td>{{ $barang->qty }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
