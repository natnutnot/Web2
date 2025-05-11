<?php
require_once 'Model.php';

$id = '';
$nama = '';
$alamat = '';
$no_hp = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = getMemberById($id);
    if ($data = mysqli_fetch_assoc($result)) {
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $no_hp = $data['no_hp'];
    }
}

if (isset($_POST['simpan'])) {
    $id_post = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];

    if ($id_post == '') {
        $sukses = insertMember($nama, $alamat, $no_hp);
    } else {
        $sukses = updateMember($id_post, $nama, $alamat, $no_hp);
    }

    if ($sukses) {
        echo "<script>alert('Data berhasil disimpan'); window.location='Member.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Member</title>
    <style>
        body {
            background-image: url('background.jpg'); /* Ganti dengan nama file gambar kamu */
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
        input[type="text"], textarea {
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
        <h2><?= $id == '' ? "Tambah" : "Edit" ?> Member</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <label>Nama:</label>
            <input type="text" name="nama" value="<?= $nama ?>" required>
            <label>Alamat:</label>
            <textarea name="alamat" required><?= $alamat ?></textarea>
            <label>No HP:</label>
            <input type="text" name="no_hp" value="<?= $no_hp ?>" required>
            <input type="submit" name="simpan" value="Simpan">
        </form>
        <br>
        <a href="Member.php">← Kembali ke Daftar Member</a>
    </div>
</body>
</html>