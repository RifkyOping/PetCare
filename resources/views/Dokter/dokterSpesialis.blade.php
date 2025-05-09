@extends('layout.master')

@section('title', 'Data Dokter Spesialis')

@section('content')
<h1 class="mt-4">Dokter Spesialis</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a class="text-decoration-none" href="{{ url('/spesialis') }}">Spesialis</a></li>
</ol> 
<div class="row">
    @foreach ($data as $d)
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card text-center" style="border-radius: 10px;">
                <div class="card-body p-3">
                    <img src="{{ asset('img/gambar1.jpg') }}"
                         class="rounded-circle mb-2" style="width: 60px; height: 60px;" />
                    <h6 class="mb-1">{{ $d->nama }}</h6>
                    <p class="text-muted small">{{ $d->keahlian }}</p>
                    <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-whatsapp"></i></a>
                    </div>
                    <a href="#" class="btn btn-sm btn-primary">Lihat Profil</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
