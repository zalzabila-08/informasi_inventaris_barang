CREATE USER 'admin_inventaris'@'localhost' IDENTIFIED BY 'admin123';

CREATE USER 'petugas_inventaris'@'localhost' IDENTIFIED BY 'petugas123';

GRANT ALL PRIVILEGES ON db_informasi_inventaris_barang.* TO 'admin_inventaris'@'localhost';

GRANT SELECT, INSERT, UPDATE ON db_informasi_inventaris_barang.barang TO 'petugas_inventaris'@'localhost';
GRANT SELECT, INSERT, UPDATE ON db_informasi_inventaris_barang.peminjaman TO 'petugas_inventaris'@'localhost';
GRANT SELECT ON db_informasi_inventaris_barang.kategori TO 'petugas_inventaris'@'localhost';
GRANT SELECT ON db_informasi_inventaris_barang.ruangan TO 'petugas_inventaris'@'localhost';
GRANT SELECT ON db_informasi_inventaris_barang.petugas TO 'petugas_inventaris'@'localhost';
GRANT SELECT ON db_informasi_inventaris_barang.view_index TO 'petugas_inventaris'@'localhost';

FLUSH PRIVILEGES;

SHOW GRANTS FOR 'admin_inventaris'@'localhost';
SHOW GRANTS FOR 'petugas_inventaris'@'localhost';