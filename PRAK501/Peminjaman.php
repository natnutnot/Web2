<?php
require_once 'Model.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_member = $_POST['id_member'];
    $id_buku = $_POST['id_buku'];
    $tanggal_peminjaman = $_POST['tgl_pinjam'];
    $tanggal_kembali = $_POST['tgl_kembali'];

    if (insertPeminjaman($id_member, $id_buku, $tanggal_peminjaman, $tanggal_kembali)) {
        echo "<script>alert('Data peminjaman berhasil disimpan'); window.location='Peminjaman.php';</script>";
        exit;
    } else {
        echo "<script>alert('Gagal menyimpan data peminjaman');</script>";
    }
}

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (deletePeminjaman($id)) {
        echo "<script>alert('Data berhasil dihapus'); window.location='Peminjaman.php';</script>";
        exit;
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}

$dataPeminjaman = getAllPeminjaman();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <style>
        body {
            background-image: url('background.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            width: 90%;
            max-width: 1000px;
            margin: 80px auto;
            border-radius: 10px;
        }
        h2 {
            text-align: center;
        }
        a.button {
            display: inline-block;
            margin: 10px 10px 20px 0;
            background-color: #00b894;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        th {
            background-color: #00cec9;
            color: #fff;
        }
        td a {
            color: #0984e3;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Peminjaman</h2>
        <a href="TampilanAwal.php" class="button">← Kembali ke Menu Utama</a>
        <a href="FormPeminjaman.php" class="button">+ Tambah Peminjaman</a>

        <?php if (mysqli_num_rows($dataPeminjaman) > 0): ?>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Member</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($dataPeminjaman)):
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($row['nama']) ?></td>
                <td><?= htmlspecialchars($row['judul']) ?></td>
                <td><?= htmlspecialchars($row['tanggal_peminjaman']) ?></td>
                <td><?= htmlspecialchars($row['tanggal_kembali']) ?></td>
                <td>
                    <a href="FormPeminjaman.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="Peminjaman.php?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <?php else: ?>
            <p style="text-align:center; color:#fff;">Belum ada data peminjaman.</p>
        <?php endif; ?>
    </div>
</body>
</html>
