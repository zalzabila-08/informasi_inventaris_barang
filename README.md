#Judul_proyek
 Informasi_inventaris_barang

#Deskripsi
 Sistem Informasi Inventaris Barang adalah sebuah aplikasi yang berbasis web yang dirancang khusus untuk memodernisasikan, mencatat, bahkan mengelola manajemen aset, serta sarana prasarana di suatu instansi atau organisasi secara digital.
 Aplikasi ini dibangun untuk mengatasi kendala pencatatan secara manual yang selalu kehilangan data, redudansi, dan bahkan bisa saja tidak akurat informasinya. Dengan menerapkan arsitektur basis data yang telah dinormalisai hingga tahap 3NF, sistem ini menjamin integritas dan konsistensi data yang tinggi antar entitas relasional.

#Anggota_kelompok
 1. Marsya-IK2511004
 2. Zalzabila-IK2511010
 3. Saskiyah-IK2511014
 4. Astria-IK2511043
 5. Nur Afiah-IK2511047

#Fitur_aplikasi
 1. Dashboard
 2. Tambah barang
 3. Edit barang
 4. Hapus barang
 5. Laporan data barang
 6. Cetak laporan
 7. Query lanjutan
 8. Konfirmasi hapus interaktif

#Teknologi_yang_digunakan
 > Bahasa pemrograman:
   1. PHP (Native)
   2. HTML5
   3. CSS3
   4. js (ES6)
 > Database:
   MySQL/MariaDB
 > Web server:
   Apache (via XAMPP)
 > Editor dan tools:
   1. VS Code
   2. Notepad
   3. phpMyAdmin
   4. Git/GitHub

#Struktur_database
 Basis data proyek kali ini dinamakan 'db_informasi_inventaris_barang' dan telah melalui beberapa proses normalisasi hingga 3NF untuk menghindari redundansi data. Berikut adalah draft tabel serta fungsinya:
 1. Tabel 'barang' 
    Fungsinya: menyimpan data yang utama (barang) inventaris serta stok dan status kondisinya.
 2. Tabel 'kategori'
    Fungsinya: menyimpan data kategori barang (elektronik, mebel. alat tulis kantor)
 3. Tabel 'ruangan' 
    Fungsinya: menyimpan data lokasi tempat barang (lab komputer, gedung utama)
 4. Tabel 'petugas'
    Fungsinya: untuk menyimpan data petugas yang mengelola atau yang bertanggung jawab atas inventaris'
 5. Tabel 'peminjaman'
    Fungsinya: menyimpan catatan riwayat peminjaman barang oleh seseorang atau pengguna.

#Cara_jalankan_aplikasi
 Ayo ikuti langkah-langkah di bawah ini untuk menjalankan aplikasi sistem Informasi inventaris barang melalui localhost
 > Persiapan folder proyek
   1. Pastikan folder proyek bernama     'Informasi_inventaris_barang'.
   2. Pindahkan atau bisa salin folder tersebut ke dalam rektori web server xampp kamu, umumnya berada di C:\xampp\htdocs\.
 > Menjalankan web server 
   1. Buka aplikasi XAMPP Control Panel.
   2. Klink tombol Start mada modul Apache dan mySQL hingga indikatornya berwarna hijau.
 > Konfigurasi database (via phpMyAdmin)
   1. Buka web (browser) dan akses URL (link): http://localhost/phpmyadmin/.
   2. Buat database baru dengan nama 'db_informasi_inventaris_barang.
   3. Masuk ke dalam databse tersebut, lalu pilih tab Import.
   4. Pilih dan masukkan file-file SQL yang berada di dalam folder database secara berurutan: 01_create_database.sql
                                     02_create_tables.sql
                                     03_insert_data.sql
 > Mengakses aplikasi
   1. Buka tab baru di browser kamu.
   2. Akses aplikasi dengan memasukkan URL (link) berikut: http://localhost/Informasi_inventaris_barang/app/index.php
 > Aplikasi siap digunakan!
