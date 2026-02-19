<?php 
session_start();
include '../back_end/koneksi.php';

$id_pinjam = $_GET['id'];
$id_buku = $_GET['id'];
$tanggal = date('Y-m-d');


mysqli_query($koneksi,
    "UPDATE peminjaman 
    SET status='dikembalikan', tanggal_kembali='$tanggal'
    WHERE id_pinjam='$id_pinjam'"
);

mysqli_query($koneksi,
    "UPDATE buku SET stok = stok + 1 WHERE id_buku='$id_buku'
");

 echo "<script>
        alert('Buku Berhasil Dikembalikan ');
        window.location.href='pinjaman_saya.php';
    </script>";

?>