<?php 
session_start();
if ($_SESSION['role'] != 'admin') {
    header("location:../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
      <link rel="stylesheet" href="../style/dashboard.css">
</head>
<body>
     <div class="navbar">
        <h1> Perpustakaan <span> EdinBurg School.</span></h1>
    </div>

    <h2>Selamat Datang <span><?php echo $_SESSION['nama']?></span></h2>

<div class="halaman">
    <div class="kotak">
        <div class="logo">📖</div>
        <p class="header">Kelola Buku Perpustakaan</p>
        <a href="buku.php">Masuk</a>
    </div>
    <div class="kotak">
        <div class="logo">🎭</div>
        <p class="header">Kelola Pengguna Perpustakaan</p>
        <a href="user.php">Masuk</a>
    </div>
    <div class="kotak">
        <div class="logo">📜</div>
        <p class="header">Kelola Transaksi Perpustakaan</p>
        <a href="transaksi.php">Masuk</a>
    </div>
</div>

   <h2><a href="../back_end/logout.php" class="logout">Logout</a></h2>
</body>
</html>