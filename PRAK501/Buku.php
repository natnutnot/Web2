<?php
require_once 'Model.php';

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (deleteBuku($id)) {
        echo "<script>alert('Data berhasil dihapus'); window.location='Buku.php';</script>";
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}

$dataBuku = getAllBuku();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <style>
        body {
            background-image: url('background.jpg');
            font-family: Arial, sans-serif;
            padding: 40px;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            max-width: 900px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #2d3436;
        }
        a.button {
            display: inline-block;
            margin: 10px 5px;
            background-color: #0984e3;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        a.button.back {
            background-color: #636e72;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #dfe6e9;
        }
        th {
            background-color: #00cec9;
            color: #fff;
        }
        td a {
            color: #0984e3;
            text-decoration: none;
        }
        td a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Buku</h2>
        <a href="TampilanAwal.php" class="button back">← Menu Utama</a>
        <a href="FormBuku.php" class="button">+ Tambah Buku</a>

        <?php if (mysqli_num_rows($dataBuku) > 0): ?>
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($dataBuku)): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['judul']) ?></td>
                <td><?= htmlspecialchars($row['pengarang']) ?></td>
                <td><?= htmlspecialchars($row['tahun_terbit']) ?></td>
                <td>
                    <a href="FormBuku.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="Buku.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p style="text-align: center;">Belum ada data buku.</p>
        <?php endif; ?>
    </div>
</body>
</html>