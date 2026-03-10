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
    <link rel="stylesheet" href="../style/buku.css">
</head>
<body>
    <div class="navbar">
        <h1>Perpustakaan <span>EdinBurg School</span></h1>
    </div>
    
    <div class="container">
        
        <!-- LEFT : FORM -->
        <div class="glass-card form-section">
            <h2>Tambah Buku</h2>
            
            <form action="tambah_buku.php" method="post">
                <div class="inputbox">
                    <label>Judul Buku</label>
                    <input type="text" name="judul" required>
                </div>
                
                <div class="inputbox">
                    <label>Stok Buku</label>
                    <input type="number" name="stok" min="1" required>
                </div>
                
                <button type="submit">Tambah</button>
            </form>
            <h2><a href="dashboard.php" class="logout">Kembali Ke Menu</a></h2>
    </div>

    <!-- RIGHT : TABLE -->
    <div class="glass-card table-section">
        <h2>Data Buku</h2>

        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>

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