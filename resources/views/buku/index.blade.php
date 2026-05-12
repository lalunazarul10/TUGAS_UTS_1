@extends('layout')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2 class="mb-0">📚 Data Buku</h2>

    <a href="/logout" class="btn btn-danger btn-sm">
        Logout
    </a>

</div>

<a href="{{ route('buku.create') }}" class="btn btn-primary mb-3">
    + Tambah Buku
</a>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered table-hover">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($bukus as $buku)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ $buku->penerbit }}</td>
            <td>{{ $buku->tahun_terbit }}</td>
            <td>
                <a href="{{ route('buku.show', $buku->id) }}" class="btn btn-info btn-sm">
                    Detail
                </a>

                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" style="display:inline-block">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection