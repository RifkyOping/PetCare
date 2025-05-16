@extends('layout.master')

@section('title', 'Data Dokter Spesialis')

@section('content')
<h1 class="mt-4">Dokter Spesialis</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active"><a class="text-decoration-none" href="{{ url('/spesialis') }}">Spesialis</a></li>
    <li class="breadcrumb-item active"><a class="text-decoration-none" href="#">Detail</a></li>
</ol>
<section style="background-color: #ffffff;">
    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                        <br>
                        <br>
                    {{-- <h5 class="my-3"></h5> --}}
                    <div class="d-flex justify-content-center gap-2 mb-2">
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-instagram"></i></a>
                        {{-- <a href="#" class="btn btn-sm btn-outline-primary"><i class="fab fa-whatsapp"></i></a> --}}
                    </div>
                    {{-- <div class="d-flex justify-content-center mb-2">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Follow</button>
                        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="col-lg-8 offset-lg-0">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $detailHewan->nama }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Jenis</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $detailHewan->jenis }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Umur</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $detailHewan->umur }} Bulan</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Jenis Kelamin</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $detailHewan->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
