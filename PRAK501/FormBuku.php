<?php
require_once 'Model.php';

$id = $judul = $pengarang = $tahun = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getBukuById($id);
    if ($data = mysqli_fetch_assoc($result)) {
        $judul = $data['judul'];
        $pengarang = $data['pengarang'];
        $tahun = $data['tahun_terbit'];
    }
}

if (isset($_POST['simpan'])) {
    $id_post = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $tahun = $_POST['tahun'];

    $sukses = ($id_post == '') ?
        insertBuku($judul, $pengarang, $tahun) :
        updateBuku($id_post, $judul, $pengarang, $tahun);

    echo $sukses
        ? "<script>alert('Data berhasil disimpan'); window.location='Buku.php';</script>"
        : "<script>alert('Gagal menyimpan data');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Buku</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .container {
            background-color: rgba(0,0,0,0.6);
            padding: 30px;
            width: 400px;
            margin: 80px auto;
            border-radius: 10px;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #00b894;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        a {
            color: #81ecec;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?= $id == '' ? "Tambah" : "Edit" ?> Buku</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Judul:</label>
            <input type="text" name="judul" value="<?= $judul ?>" required>
            <label>Pengarang:</label>
            <input type="text" name="pengarang" value="<?= $pengarang ?>" required>
            <label>Tahun Terbit:</label>
            <input type="number" name="tahun" value="<?= $tahun ?>" required>
            <input type="submit" name="simpan" value="Simpan">
        </form>
        <br>
        <a href="Buku.php">← Kembali ke Daftar Buku</a> |
        <a href="TampilanAwal.php">🏠 Menu Utama</a>
    </div>
</body>
</html>
