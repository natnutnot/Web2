<?php 
require_once 'Model.php';
$dataMember = getAllMember();

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    if (deleteMember($id)) {
        echo "<script>alert('Data berhasil dihapus'); window.location='Member.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
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
            width: 90%;
            max-width: 900px;
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
        <h2>Daftar Member</h2>
        <a href="TampilanAwal.php" class="button">← Kembali ke Menu Utama</a>
        <a href="FormMember.php" class="button">+ Tambah Member</a>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($dataMember)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['alamat'] . "</td>";
                echo "<td>" . $row['no_hp'] . "</td>";
                echo "<td>
                        <a href='FormMember.php?id=" . $row['id'] . "'>Edit</a> |
                        <a href='Member.php?hapus=" . $row['id'] . "' onclick='return confirm(\"Yakin hapus?\")'>Hapus</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
