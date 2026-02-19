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
    <title>Anggota Perpustakaan</title>
</head>
<body>
        <div class="navbar">
        <h1>📖Perpustakaan <span> EdinBurg School</span>🏫</h1>
    </div>


<div class="list">
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            
        </tr>

<?php 
    $perintah = mysqli_query($koneksi, "SELECT * FROM users");
    while ($data = mysqli_fetch_assoc($perintah)) {
?>
        <tr>
            <td><?php echo $no ++;?></td>
            <td><?php echo $data['nama'];?></td>
            <td><?php echo $data['username'];?></td>
  
        </tr>
<?php } ?>
    </table>
<a href="dashboard.php">Kembali</a>
</div>
</body>
</html>