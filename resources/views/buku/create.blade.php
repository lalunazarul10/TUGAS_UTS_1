@extends('layout')

@section('content')

<h2 class="mb-4">Tambah Buku</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('buku.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control">
    </div>

    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control">
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
        </button>

    <a href="/buku" class="btn btn-secondary">
        Kembali
    </a>
</form>

@endsection