@extends('layout.app')

@section('title', 'Wisata Kampung Dolanan')

@section('content')
<div class="container mt-5">
    <h2>Kampung Dolanan</h2>
    <p>Tempat wisata edukasi yang menawarkan berbagai permainan tradisional dan kegiatan outbond.</p>
    <img src="{{ asset('images/kampung_dolanan.jpg') }}" class="img-fluid mb-4" alt="Kampung Dolanan">
    
    <h3>Paket Kegiatan yang Tersedia</h3>
    <ul class="list-group mb-4">
        @foreach($paket_kegiatan as $paket)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $paket->nama_paket }}
                <span class="badge bg-primary rounded-pill">Harga: Rp {{ number_format($paket->harga) }}</span>
                <a href="{{ route('pemesanan.create', $paket->id) }}" class="btn btn-success">Pesan Paket</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Beranda</a>
</div>
@endsection
