# Lab9Web.
MUHAMAD SAEFUL RAFII 312410374
# langkah–langkah lengkap pembuatan project Lab 9 PHP Modular
1. Membuat Struktur Folder Project

Pertama, buat sebuah folder project dengan struktur sebagai berikut:

project/
│── index.php
│
│── config/
│   └── database.php
│
│── views/
│   ├── header.php
│   ├── footer.php
│   └── dashboard.php
│
│── modules/
│   ├── user/
│   │   ├── list.php
│   │   └── add.php
│   │
│   └── auth/
│       ├── login.php
│       └── logout.php
│
└── assets/
    ├── css/
    │   └── style.css
    └── js/
2. Membuat File Koneksi Database
Di dalam folder config, saya membuat file database.php yang berfungsi menyambungkan aplikasi dengan database MySQL.
Kode yang ditulis:
$conn = mysqli_connect($host, $user, $pass, $db);
<img width="1919" height="1007" alt="image" src="https://github.com/user-attachments/assets/5bd9b04a-d7f0-4589-bc2b-3d08aae8b3f0" />

3. Menyiapkan Halaman Template (Header dan Footer)
Untuk menghindari pengulangan kode HTML, saya membuat file:
header.php → bagian atas halaman
footer.php → bagian bawah halaman
<img width="1200" height="751" alt="image" src="https://github.com/user-attachments/assets/05ac4da7-128d-462d-aa81-aabb869a9654" />

4. Membuat Routing pada index.php
index.php menjadi pusat dari seluruh halaman.
Saat pengguna membuka URL seperti:
index.php?page=user/list
Maka index.php akan mencari file yang sesuai di dalam array routing
<img width="1335" height="998" alt="image" src="https://github.com/user-attachments/assets/24ec9cc9-00e0-4fd4-8160-799478566ead" />

5. Membuat Halaman Dashboard
Halaman dashboard hanya berupa tampilan sambutan setelah login berhasil.
File ini dibuat di folder views/dashboard.php

6. Membuat Modul User (Tambah & Tampilkan)
Pada folder modules/user, saya membuat dua file:

a. list.php
Berfungsi menampilkan data user dari tabel users menggunakan query:
SELECT * FROM users
Tampilannya menggunakan tabel dengan styling CSS.

b. add.php
Form untuk menambah user baru, lalu disimpan ke database menggunakan:
INSERT INTO users 

7. Membuat Fitur Login
Fitur login dibuat pada:
modules/auth/login.php
Fungsinya:
Memvalidasi username dan password dari database
Jika benar → membuat session:
8. buat css
ini tampilan sebelum kena css
<img width="569" height="518" alt="image" src="https://github.com/user-attachments/assets/3fc4b244-1ef6-4275-b653-43fc293fa641" />
<img width="410" height="313" alt="image" src="https://github.com/user-attachments/assets/e9c359d8-f515-4f7a-b145-184587bf85a5" />

<img width="880" height="547" alt="image" src="https://github.com/user-attachments/assets/16a29960-ff23-4db0-802c-497bde1dbe3f" />

# setelah pake css
img width="1196" height="572" alt="image" src="https://github.com/user-attachments/assets/8f29a527-0764-4727-9065-2d166f5e078f" />
<img width="1919" height="1009" alt="image" src="https://github.com/user-attachments/assets/79138b7f-2303-47a4-b3ad-eafb41116f87" />

