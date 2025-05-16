<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px">
                        {{-- <h5 class="my-3">{{ $pengguna->nama }}</h5> --}}
                        {{-- <p class="text-muted mb-1">Full Stack Developer</p>
                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
                        <div class="d-flex justify-content-center mx-auto mt-3">
                            <a href="/beranda">
                                <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">Edit Profil</button>
                            </a>
                            {{-- <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Message</button> --}}
                        </div>
                        <div class="container" >
                            <hr class="mt-5">
                            {{-- <div class="row gx-1">
                                <div class="col-3 text-start">Nama :</div>
                                <div class="col-9 text-start">{{ $pengguna->nama}}</div>
                            </div>
                            <hr>
                            <div class="row gx-1">
                                <div class="col-3 text-start">Email :</div>
                                <div class="col-9 text-start">{{ $pengguna->email}}</div>
                            </div>
                            <hr> --}}
                                <div class="container text-center">
  <div class="row">
    <div class="col">
      1 of 2
    </div>
    <div class="col">
      2 of 2
    </div>
  </div>
</div>
                            <hr>
                        </div>
                    </div>
                </div>
                {{-- <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fas fa-globe fa-lg text-warning"></i>
                            <p class="mb-0">https://mdbootstrap.com</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-github fa-lg text-body"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                            <p class="mb-0">@mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                            <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                            <p class="mb-0">mdbootstrap</p>
                        </li>
                        </ul>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="col-lg-8">
                <div class="card mb-4"> --}}
                    {{-- <div class="card-body">
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nama Lengkap</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $pengguna->nama }}</p>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Email</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $pengguna->email }}</p>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">No Telepon</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $pengguna->no_telepon }}</p>
                        </div>
                        </div>
                        <hr>
                        <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Alamat</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0">{{ $pengguna->alamat }}</p>
                        </div>
                        </div>
                    </div> --}}
                {{-- </div> --}}
                <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span></p>
                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4 mb-md-0">
                    <div class="card-body">
                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span> Project Status
                        </p>
                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                        <div class="progress rounded" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                        <div class="progress rounded mb-2" style="height: 5px;">
                        <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>
