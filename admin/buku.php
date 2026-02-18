<?php 
session_start();
include '../back_end/koneksi.php';
if ($_SESSION['role'] != 'admin') {
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

    <div class="card">
        <h2>Login</h2>
        <p>Silahkan Login Terlebih Dahulu</p>
       <form action="tambah_buku.php" method="post">
        <div class="inputbox">
            <label>Judul Buku</label>
            <input type="text" name="judul" placeholder="Masukan Judul Buku" required>
        </div>
        <div class="inputbox">
            <label>Stok Buku</label>
            <input type="number" min="1" name="stok" placeholder="Masukan Stock Buku" required>
        </div>
            <button type="submit">Tambah Buku</button>
            <a href="dashboard.php">Kembali Ke Menu</a>
       </form> 

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
                <a href="hapus_buku.php?id=<?php echo $buku['id_buku']; ?>">Hapus Buku</a>
            </td>
        </tr>
<?php } ?>
    </table>

</div>
</body>
</html>