<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Pilih Role</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .form-section { display: none; }
    </style>
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="text-center mb-4"><i class="fas fa-user-plus me-2"></i>Registrasi PetCare</h2>

    <div class="text-center mb-4">
        <label class="form-label">Pilih Jenis Akun:</label>
        <div class="btn-group">
            <button class="btn btn-outline-primary" onclick="showForm('pengguna')">
                <i class="fas fa-user"></i> Pengguna
            </button>
            <button class="btn btn-outline-success" onclick="showForm('dokter')">
                <i class="fas fa-user-md"></i> Dokter
            </button>
        </div>
    </div>

    <!-- Form Pengguna -->
    <div id="form-pengguna" class="form-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h5><i class="fas fa-user"></i> Form Registrasi Pengguna</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('regis.submit') }}">
                            @csrf
                            <input type="hidden" name="role" value="user">
                            <div class="mb-3">
                                <label for="user_name">Nama</label>
                                <input type="text" class="form-control" id="user_name" name="nama" required>
                            </div>
                            <div class="mb-3">
                                <label for="user_email">Email</label>
                                <input type="email" class="form-control" id="user_email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="user_password">Password</label>
                                <input type="password" class="form-control" id="user_password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="no_telepon">No Telepon</label>
                                <input type="text" class="form-control" id="no_telepon" name="no_telepon" required>
                            </div>
                            <div class="mb-3">
                                <label for="Alamat">Alamat</label>
                                <input type="text" class="form-control" id="Alamat" name="alamat" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Daftar sebagai Pengguna</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form Dokter -->
    <div id="form-dokter" class="form-section">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header bg-success text-white text-center">
                        <h5><i class="fas fa-user-md"></i> Form Registrasi Dokter</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <input type="hidden" name="role" value="dokter">
                            <div class="mb-3">
                                <label for="dokter_name">Nama</label>
                                <input type="text" class="form-control" id="dokter_name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="dokter_email">Email</label>
                                <input type="email" class="form-control" id="dokter_email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="dokter_password">Password</label>
                                <input type="password" class="form-control" id="dokter_password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="dokter_password_confirmation">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="dokter_password_confirmation" name="password_confirmation" required>
                            </div>
                            <div class="mb-3">
                                <label for="dokter_str">Nomor STR</label>
                                <input type="text" class="form-control" id="dokter_str" name="str" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Daftar sebagai Dokter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showForm(role) {
        document.getElementById('form-pengguna').style.display = (role === 'pengguna') ? 'block' : 'none';
        document.getElementById('form-dokter').style.display = (role === 'dokter') ? 'block' : 'none';
    }
</script>
</body>
</html>
