CREATE DATABASE IF NOT EXISTS perpustakaan
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE perpustakaan;

CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(150) NOT NULL,
    penulis VARCHAR(100) NOT NULL,
    penerbit VARCHAR(100) NOT NULL,
    tahun_terbit YEAR NOT NULL,
    isbn VARCHAR(20) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, isbn) VALUES
('Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005, '9789793062792'),
('Bumi Manusia', 'Pramoedya Ananta Toer', 'Hasta Mitra', 1980, '9789799731234'),
('Filosofi Teras', 'Henry Manampiring', 'Kompas', 2018, '9786024125189'),
('Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009, '9781234567001'),
('Laut Bercerita', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2017, '9781234567003'),
('Dilan 1990', 'Pidi Baiq', 'Pastel Books', 2014, '9781234567004'),
('Atomic Habits', 'James Clear', 'Gramedia Pustaka Utama', 2019, '9781234567008'),
('Sapiens', 'Yuval Noah Harari', 'Kepustakaan Populer Gramedia', 2017, '9781234567009');