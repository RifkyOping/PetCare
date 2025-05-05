# <p align="center" style="margin-bottom: 0px;">PetCare</p>
## <p align="center" style="margin-top: 0;">KLINIK HEWAN</p>

<p align="center">
  <img src="LOGO-UNSULBAR.png" width="300" alt="Deskripsi gambar" />
</p>

### <p align="center">RIFKY</p>
### <p align="center">D0223507</p></br>
### <p align="center">Framework Web Based</p>
### <p align="center">2025</p>


## Role

### Admin
- Login & Logout
- Mengelola data user
- Mengelola data dokter
- Mengelola data hewan
- Mengelola data rekam medis hewan
- Mengelola jadwal
- Mengelola jadwal janji temu

### Pengguna
- Login & Logout
- Tambah & edit data hewan peliharaan
- Melihat jadwal janji temu
- Mengelola profil
- Mendaftarkan data hewan
- Mengelola profil hewan
- Melihat riwayat rekam medis hewan

### Dokter
- Login & Logout
- Kelola jadwal janji temu
- Kelola profil
- Melihat riwayat rekam medis hewan

## Tabel

### Tabel: Pengguna
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| nama       | STRING    | Nama Pengguna                  |
| email      | STRING    | Email Pengguna                 |
| password   | STRING    | Password Pengguna              |
| no_telepon | STRING    | Nomor Telepon Pengguna         |
| alamat     | STRING    | Alamat Pengguna                |
| role       | ENUM      | Status Role Pengguna           |

### Tabel: Dokter
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| nama       | STRING    | Nama Dokter                    |
| email      | STRING    | Email Dokter                   |
| password   | STRING    | Password Dokter                |
| no_telepon | STRING    | Nomor Telepon Dokter           |
| spesialisasi | STRING  | Keahlian                       |

### Tabel: Hewan
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| user_id    | INT       | Foreign key                    |
| nama       | STRING    | Nama Hewan                     |
| jenis      | STRING    | Jenis Hewan (Kucing, Anjing)  |
| umur       | INT       | Umur Hewan                     |
| jenis_kelamin | ENUM   | Jenis Kelamin Hewan (Jantan/Betina) |

### Tabel: Janji Temu
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| user_id    | INT       | Foreign key                    |
| dokter_id  | INT       | Foreign key                    |
| hewan_id   | INT       | Foreign key                    |
| tanggal_janji | DATETIME | Tanggal Janji Temu          |
| status     | ENUM      | Status Janji (dijadwalkan, selesai, dibatalkan) |

### Tabel: Rekam Medis
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| janjiTemu_id | INT     | Foreign key                    |
| keluhan    | TEXT      | Deskripsi Umum                 |
| diagnosa   | TEXT      | Hasil Diagnosa Dokter          |
| tindakan    | TEXT      | Hasil Tindakan Dokter          |
| resep      | TEXT      | Obat yang Diresepkan           |

### Tabel: Jadwal Dokter
| Nama Field | Tipe Data | Keterangan                     |
|------------|-----------|--------------------------------|
| id         | INT       | Primary key                    |
| dokter_id  | INT       | Foreign key                    |
| hari       | ENUM      | Hari Praktik Dokter (senin, selasa, rabu) |
| jam_mulai  | TIME      | Jam Mulai Praktik Dokter      |
| jam_selesai| TIME      | Jam Selesai Praktik Dokter    |

## Jenis Relasi
- **Pengguna - Hewan**: One to Many (Satu pengguna bisa memiliki banyak hewan)
- **Pengguna - Janji Temu**: One to Many (Satu pengguna bisa memiliki banyak janji temu)
- **Dokter - Janji Temu**: One to Many (Satu dokter bisa melayani banyak janji temu)
- **Hewan - Janji Temu**: One to Many (Satu Hewan bisa memiliki banyak janji temu)
- **Janji Temu - Rekam Medis**: One to One (Satu Janji Temu hanya bisa memiliki rekam medis)
- **Dokter - Jadwal**: One to Many (Satu Dokter bisa memiliki banyak Jadwal)