@extends('layout.app')

@section('title', $news->title)

@section('content')
    <div class="container mt-5">
        <h1>{{ $news->title }}</h1>
        <p>{{ $news->content }}</p>
        @if($news->image)
            <img src="{{ asset($news->image) }}" alt="{{ $news->title }}" class="img-fluid">
        @endif
        <a href="{{ route('news.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar Berita</a>
    </div>
@endsection
