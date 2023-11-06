@extends('layouts.public')

@section('title', 'Ubah Barang')

@section('judul', 'Halaman Ubah Barang')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('barang.update', $barang->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control @error('nama_barang') is-invalid @enderror"
                        value="{{ old('nama_barang') ?? $barang->nama_barang }}" />
                    @error('nama_barang')
                        <div class="text-sm text-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="col-md-12">
                    <label for="qty">Qty</label>
                    <input type="number" name="qty" class="form-control @error('qty') is-invalid @enderror"
                        value="{{ old('qty') ?? $barang->qty }}" />
                    @error('qty')
                        <div class="text-sm text-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @enderror
                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/barang') }}" class="btn btn-danger">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
