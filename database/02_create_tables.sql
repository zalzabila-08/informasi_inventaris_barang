CREATE TABLE kategori (
 -> id_kategori INT AUTO_INCREMENT PRIMARY KEY,
 -> nama_kategori VARCHAR(100) NOT NULL
 -> );

CREATE TABLE ruangan (
 -> id_ruangan INT AUTO_INCREMENT PRIMARY KEY,
 -> nama_ruangan VARCHAR(100) NOT NULL,
 -> lokasi VARCHAR(100) NOT NULL
 -> );

CREATE TABLE petugas (
 -> id_petugas INT AUTO_INCREMENT PRIMARY KEY,
 -> nama_petugas VARCHAR(100) NOT NULL,
 -> username VARCHAR(50) UNIQUE NOT NULL,
 -> password VARCHAR(255) NOT NULL
 -> );

CREATE TABLE barang (
 -> id_barang INT AUTO_INCREMENT PRIMARY KEY,
 -> nama_barang VARCHAR(150) NOT NULL,
 -> id_kategori INT,
 -> id_ruangan INT,
 -> stok INT DEFAULT 0,
 -> kondisi VARCHAR(50) NOT NULL,
 -> FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori) ON DELETE SET NULL,
 -> FOREIGN KEY (id_ruangan) REFERENCES ruangan(id_ruangan) ON DELETE SET NULL
 -> );

CREATE TABLE peminjaman (
 -> id_peminjaman INT AUTO_INCREMENT PRIMARY KEY,
 -> id_barang INT,
 -> id_petugas INT,
 -> nama_peminjam VARCHAR(100) NOT NULL,
 -> jumlah INT NOT NULL,
 -> tanggal_pinjam DATE NOT NULL,
 -> status VARCHAR(50) DEFAULT 'Dipinjam',
 -> FOREIGN KEY (id_barang) REFERENCES barang(id_barang) ON DELETE CASCADE,
 -> FOREIGN KEY (id_petugas) REFERENCES petugas(id_petugas) ON DELETE SET NULL
 -> );