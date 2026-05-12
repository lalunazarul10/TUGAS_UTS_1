@extends('layout')

@section('content')

<h2 class="mb-4">Detail Buku</h2>

<div class="card">
    <div class="card-body">
        <h4>{{ $buku->judul }}</h4>

        <p>
            <strong>Penulis :</strong>
            {{ $buku->penulis }}
        </p>

        <p>
            <strong>Penerbit :</strong>
            {{ $buku->penerbit }}
            </p>

        <p>
            <strong>Tahun Terbit :</strong>
            {{ $buku->tahun_terbit }}
        </p>

        <a href="/buku" class="btn btn-primary">
            Kembali
        </a>
    </div>
</div>

@endsection