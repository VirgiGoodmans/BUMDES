@extends('layout.app')

@section('title', 'Wisata Siblarak')

@section('content')
    <h2>Siblarak</h2>
    <p>Wisata alam dengan spot foto menarik di Desa Sidowayah.</p>
    <img src="{{ asset('images/siblarak.jpg') }}" class="img-fluid" alt="Siblarak">
    
    <!-- Booking Spot -->
    <div class="mt-5">
        <h3>Booking Spot</h3>
        <ul class="list-group">
            @foreach($spots as $spot)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $spot->nama_spot }}
                    <span class="badge bg-primary rounded-pill">Kapasitas: {{ $spot->kapasitas }}</span>
                    <a href="{{ route('pemesanan.create', $spot->id) }}" class="btn btn-success">Pesan</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
