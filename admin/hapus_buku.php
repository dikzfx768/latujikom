<?php 
session_start();
include '../back_end/koneksi.php';

$id = $_GET['id'];


mysqli_query($koneksi,
    "DELETE FROM buku WHERE id_buku='$id'"
);


    echo "<script>
        alert('Buku Berhasil Dihapus ');
        window.location.href='buku.php';
    </script>";


?>