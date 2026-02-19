<?php 
session_start();
include '../back_end/koneksi.php';
if ($_SESSION['role'] != 'admin') {
    header("location:../index.php");
    }
    

    $no = 1;
    $perintah = mysqli_query($koneksi, "SELECT peminjaman .*, buku.judul ,users.nama
    FROM peminjaman
    JOIN buku ON peminjaman.id_buku = buku.id_buku
    JOIN users ON peminjaman.id_user = users.id_user
    ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histori Transaksi Perpustakaan</title>
</head>
<body>
        <div class="navbar">
        <h1>📖Perpustakaan <span> EdinBurg School</span>🏫</h1>
    </div>

<h2>Daftar Pinjaman Saya </h2>
<div class="list">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Tanggal_Pinjam</th>
            <th>Tanggal_Kembali</th>
            <th>Status Buku</th>
        </tr>

<?php 
    while ($data = mysqli_fetch_assoc($perintah)) {
?>
        <tr>
            <td><?php echo $no ++;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $data['tanggal_pinjam'];?></td>
            <td><?php echo $data['tanggal_kembali'];?></td>
            <td><?php echo $data['status'];?></td>

        </tr>
<?php } ?>
    </table>
<a href="dashboard.php">Kembali Ke Menu</a>
</div>
</body>
</html>