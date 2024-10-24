@extends('layout.app')

@section('title', 'Daftar Berita')

@section('content')
    <div class="container mt-5">
        <h1>Daftar Berita</h1>
        @foreach($news as $item)
            <div class="card mb-3">
                <div class="card-body">
                    <h2>{{ $item->title }}</h2>
                    <p>{{ Str::limit($item->content, 150) }}</p>
                    <a href="{{ route('news.show', $item->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        @endforeach
        <a href="{{ route('news.create') }}" class="btn btn-success">Tambah Berita</a>
    </div>
@endsection
