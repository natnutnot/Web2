<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Digital</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
            text-align: center;
            padding-top: 200px;
            margin: 0;
        }

        .container {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 50px;
            width: 80%;
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 40px;
        }

        .menu a {
            display: block;
            margin: 15px auto;
            padding: 15px 20px;
            background-color: #00cec9;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            width: 70%;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #00b894;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Perpustakaan</h1>
        <div class="menu">
            <a href="Buku.php">📚 Lihat Daftar Buku</a>
            <a href="FormPeminjaman.php">📄 Form Peminjaman</a>
            <a href="Peminjaman.php">📑 Data Peminjaman</a>
            <a href="Member.php">👥 Data Member</a>
        </div>
    </div>
</body>
</html>