<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="style/login.css" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <div class="logo">📚</div>
        <h1> Perpustakaan <span> EdinBurg School.</span></h1>
    </div>
<div class="hero">

    <div class="card">
        <h2>Login</h2>
        <p>Silahkan Login Terlebih Dahulu</p>
        <form action="back_end/proses_register.php" method="post">
            <div class="inputbox">
                <label>Nama</label>
                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required>
            </div>
            <div class="inputbox">
                <label>Username</label>
                <input type="text" name="username" placeholder="Masukan Username" required>
            </div>
            <div class="inputbox">
                <label>Password</label>
                <input type="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="button">

                <button type="submit">Daftar</button>
            </div>
            <p>Sudah Punya Akun?<a href="index.php">Login Sekarang</a></p>
        </form> 
        
    </div>
    </div>
</body>
</html>