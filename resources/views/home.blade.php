@extends('layout.app')

@section('title', 'Beranda')

@section('content')
    <!-- Sliding News -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/banner1.jpg') }}" class="d-block w-100" alt="Banner 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner2.jpg') }}" class="d-block w-100" alt="Banner 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner3.jpg') }}" class="d-block w-100" alt="Banner 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/news1.jpg') }}" class="d-block w-100" alt="News 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/news2.jpg') }}" class="d-block w-100" alt="News 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/news3.jpg') }}" class="d-block w-100" alt="News 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <!-- Profil Desa Singkat -->
    <div class="mt-5">
        <h2>Profil Desa Sidowayah</h2>
        <p>Desa Sidowayah merupakan desa wisata dengan berbagai destinasi menarik seperti Siblarak, Umbul Kemanten, dan Kampung Dolanan. Desa ini juga terkenal dengan produk UMKM lokalnya.</p>
        <img src="{{ asset('images/desa.jpg') }}" class="img-fluid" alt="Profil Desa">
    </div>

    <!-- Newest Info -->
    <div class="mt-5">
        <h3>Info Terbaru</h3>
        <ul class="list-group">
            @foreach($news as $item)
                <li class="list-group-item">
                    <a href="{{ url('news/'.$item->id) }}">{{ $item->judul }}</a> - {{ $item->tanggal_terbit }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
