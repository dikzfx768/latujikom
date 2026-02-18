<?php 
session_start();
include '../back_end/koneksi.php';
if ($_SESSION['role'] != 'siswa') {
    header("location:../index.php");
    }
    
    $id_user = $_SESSION['id_user'];
    $no = 1;
    $perintah = mysqli_query($koneksi, "SELECT peminjaman .*, buku.judul
    FROM Peminjaman
    JOIN buku ON peminjaman.id_buku = buku.id_buku
    WHERE peminjaman.id_user = '$id_user' ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinjaman Saya</title>
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
            <th>Judul</th>
            <th>Tanggal_Pinjam</th>
            <th>Tanggal_Kembali</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

<?php 
    while ($data = mysqli_fetch_assoc($perintah)) {
?>
        <tr>
            <td><?php echo $no ++;?></td>
            <td><?php echo $data['judul'];?></td>
            <td><?php echo $data['tanggal_pinjam'];?></td>
            <td><?php echo $data['tanggal_kembali'];?></td>
            <td><?php echo $data['status'];?></td>
            <td>
                <?php if ($data['status'] == 'dipinjam' ) { ?>
                    <a href="pinjam.php?id=<?php echo $data['id_pinjam']; ?>&buku=<?php echo $data['id_buku'];?>">Kembalikan Buku</a>
                <?php } else {
                    echo "Selesai";
                } ?> 
            </td>
        </tr>
<?php } ?>
    </table>
<a href="dashboard.php">Kembali Ke Menu</a>
</div>
</body>
</html>