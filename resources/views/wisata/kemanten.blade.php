@extends('layout.app')

@section('title', 'Wisata Umbul Kemanten')

@section('content')
<div class="container mt-5">
    <h2>Umbul Kemanten</h2>
    <p>Pemandian alami yang asri di Desa Sidowayah, cocok untuk liburan keluarga.</p>
    <img src="{{ asset('images/kemanten.jpg') }}" class="img-fluid mb-4" alt="Umbul Kemanten">
    
    <h3>Spot yang Tersedia</h3>
    <ul class="list-group mb-4">
        @foreach($spots as $spot)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $spot->nama_spot }}
                <span class="badge bg-primary rounded-pill">Kapasitas: {{ $spot->kapasitas }}</span>
                <a href="{{ route('pemesanan.create', $spot->id) }}" class="btn btn-success">Pesan</a>
            </li>
        @endforeach
    </ul>

    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Beranda</a>
</div>
@endsection
