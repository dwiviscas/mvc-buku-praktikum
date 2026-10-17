# MVC PHP Native - Data Buku

Aplikasi CRUD Data Buku untuk mempelajari pola Model-View-Controller pada PHP Native.

## Kebutuhan
- PHP 8.0 atau lebih baru
- MySQL/MariaDB
- Web server lokal (XAMPP / Laragon)
- Git

## Instalasi
1. Salin project ke folder web server (`htdocs` pada XAMPP).
2. Import `database/perpustakaan.sql` melalui phpMyAdmin.
3. Sesuaikan koneksi pada `config/database.php`.
4. Buka `http://localhost/mvc-buku/public/index.php`.

## Struktur MVC
- `app/models/` : akses dan operasi data (PDO).
- `app/controllers/` : alur request, validasi, pemanggilan Model/View.
- `app/views/` : tampilan HTML (termasuk layout di `partials/`).
- `config/` : konfigurasi koneksi database.
- `database/` : skema dan data awal SQL.
- `public/` : entry point, router sederhana, dan CSS.

## Entitas Buku
id, judul, penulis, penerbit, tahun_terbit, isbn, created_at

## Fitur
- Menampilkan, menambah, mengubah, dan menghapus data buku
- Validasi input dan pesan sukses/gagal
- Prepared statement dan escaping output

## Histori Git
3eb8529 (HEAD -> main) feat: add delete book feature
6a6c4b5 feat: add edit and update book feature
77f0766 feat: add create book feature
728f68c style: add soft blue and green theme
6e92472 feat: add book list page with shared layout
73c1a63 feat: add PDO database connection
1785501 feat: add book database schema and seed data
54f6450 chore: initialize mvc php native project

