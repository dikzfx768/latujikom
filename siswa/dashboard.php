<?php 
session_start();
if ($_SESSION['role'] != 'siswa') {
    header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
</head>
<body>
     <div class="navbar">
        <h1>📖Perpustakaan <span> EdinBurg School</span>🏫</h1>
    </div>

    <h2>Selamat Datang <span><?php echo $_SESSION['nama']?></span></h2>
    
    <div class="kotak">
        <div class="logo">📖</div>
        <p class="header">Pinjam Buku Perpustakaan</p>
        <a href="buku.php">Masuk</a>
    </div>
    <div class="kotak">
        <div class="logo">📚</div>
        <p class="header">Pinjaman Saya</p>
        <a href="pinjaman_saya.php">Masuk</a>
    </div>

    <a href="../back_end/logout.php">Logout</a>
</body>
</html>