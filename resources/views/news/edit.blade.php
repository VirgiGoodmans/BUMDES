@extends('layout.app')

@section('title', 'Edit Berita')

@section('content')
    <div class="container mt-5">
        <h1>Edit Berita</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" name="title" class="form-control" value="{{ $news->title }}" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Konten</label>
                <textarea name="content" class="form-control" rows="5" required>{{ $news->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar (opsional)</label>
                <input type="file" name="image" class="form-control">
                <img src="{{ asset($news->image) }}" alt="Gambar Berita" width="150">
            </div>
            <button type="submit" class="btn btn-primary">Perbarui Berita</button>
        </form>
    </div>
@endsection
