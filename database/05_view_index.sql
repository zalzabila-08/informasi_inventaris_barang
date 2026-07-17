CREATE VIEW view_index AS
 -> SELECT
 -> b.id_barang,
 -> b.nama_barang,
 -> k.nama_kategori,
 -> r.nama_ruangan,
 -> b.stok,
 -> b.kondisi
 -> FROM barang b
 -> LEFT JOIN kategori k ON b.id_kategori = k.id_kategori
 -> LEFT JOIN ruangan r ON b.id_ruangan = r.id_ruangan;

SELECT * FROM view_index;
