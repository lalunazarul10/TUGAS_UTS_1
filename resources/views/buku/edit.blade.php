@extends('layout')

@section('content')

<h2 class="mb-4">Edit Buku</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('buku.update', $buku->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control"
        value="{{ $buku->judul }}">
    </div>

    <div class="mb-3">
        <label>Penulis</label>
        <input type="text" name="penulis" class="form-control"
        value="{{ $buku->penulis }}">
    </div>

    <div class="mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control"
        value="{{ $buku->penerbit }}">
    </div>

    <div class="mb-3">
        <label>Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control"
        value="{{ $buku->tahun_terbit }}">
    </div>

    <button type="submit" class="btn btn-success">
        Update
    </button>

    <a href="/buku" class="btn btn-secondary">
        Kembali
    </a>
</form>

@endsection