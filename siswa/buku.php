<?php 
session_start();
include '../back_end/koneksi.php';
if ($_SESSION['role'] != 'siswa') {
    header("location:../index.php");
}

$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Perpustakaan</title>
</head>
<body>
        <div class="navbar">
        <h1>📖Perpustakaan <span> EdinBurg School</span>🏫</h1>
    </div>

<h2>Daftar Buku Perpustakaan </h2>
<div class="list">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Stock</th>
            <th>Aksi</th>
        </tr>

<?php 
    $perintah = mysqli_query($koneksi, "SELECT * FROM buku");
    while ($buku = mysqli_fetch_assoc($perintah)) {
?>
        <tr>
            <td><?php echo $no ++;?></td>
            <td><?php echo $buku['judul'];?></td>
            <td><?php echo $buku['stok'];?></td>
            <td>
                <?php if ($buku['stok'] > 0 ) { ?>
                    <a href="pinjam.php?id=<?php echo $buku['id_buku']; ?>">Pinjam Buku</a>
                <?php } else {
                    echo "Stock Habis";
                } ?> 
            </td>
        </tr>
<?php } ?>
    </table>
<a href="dashboard.php">Kembali Ke Menu</a>
</div>
</body>
</html>