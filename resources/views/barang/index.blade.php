@extends('layouts.public')

@section('title', 'Halaman Utama')

@section('judul', 'List Barang')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ url('/') }}" class="btn btn-danger">Kembali</a>
            <a href="{{ url('/barang/create') }}" class="btn btn-success">Tambah</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Qty</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_barang as $barang)
                    <tr>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->qty }}</td>
                        <td>
                            <a href="{{ route('barang.show', $barang->id) }}" class="btn btn-primary">Lihat</a>
                            <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('barang.destroy', $barang->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-muted text-center">Data tidak ada.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
