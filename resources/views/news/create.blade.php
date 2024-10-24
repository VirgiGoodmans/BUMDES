@extends('layout.app')

@section('title', 'Tambah Berita')

@section('content')
    <div class="container mt-5">
        <h1>Tambah Berita</h1>
        <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea name="content" class="form-control" rows="5" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Tambah Berita</button>
        </form>
    </div>
@endsection
