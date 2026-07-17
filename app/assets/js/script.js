// Fungsi konfirmasi hapus data
function konfirmasiHapus(event) {
    if (!confirm("Apakah Anda yakin ingin menghapus data barang ini? Data yang dihapus tidak bisa dikembalikan.")) {
        event.preventDefault();
        return false;
    }
    return true;
}

// Menghubungkan fungsi ke semua tombol hapus secara otomatis setelah halaman selesai dimuat
document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".btn-delete");
    deleteButtons.forEach(button => {
        button.addEventListener("click", konfirmasiHapus);
    });
});