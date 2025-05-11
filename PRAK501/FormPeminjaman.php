<?php  
require_once 'Model.php'; 

$dataBuku = getAllBuku();
$dataMember = getAllMember();
?> 

<!DOCTYPE html> 
<html> 
<head> 
    <title>Form Peminjaman Buku</title> 
    <style> 
        body { 
            background-image: url('background.jpg'); 
            background-size: cover; 
            font-family: Arial, sans-serif; 
            color: #fff; 
        } 
        .container { 
            background-color: rgba(0, 0, 0, 0.7); 
            padding: 30px; 
            width: 90%; 
            max-width: 500px; 
            margin: 80px auto; 
            border-radius: 10px; 
        } 
        h2 { 
            text-align: center; 
            margin-bottom: 30px; 
        } 
        form label { 
            display: block; 
            margin-bottom: 8px; 
            font-weight: bold; 
        } 
        form input, form select { 
            width: 100%; 
            padding: 10px; 
            margin-bottom: 20px; 
            border-radius: 5px; 
            border: none; 
        } 
        .button { 
            background-color: #00b894; 
            color: #fff; 
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
            width: 100%; 
        } 
        .button:hover { 
            background-color: #019875; 
        } 
        .nav-link {
            color: #81ecec;
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
        }
    </style> 
</head> 
<body> 
    <div class="container"> 
        <h2>Form Peminjaman Buku</h2> 
        <form action="Peminjaman.php" method="POST"> 
            <label for="id_member">Pilih Member</label> 
            <select name="id_member" id="id_member" required> 
                <option value="">-- Pilih Member --</option> 
                <?php  
                while ($member = mysqli_fetch_assoc($dataMember)) { 
                    echo "<option value='{$member['id']}'>({$member['id']}) {$member['nama']}</option>"; 
                } 
                ?> 
            </select> 
            <label for="id_buku">Pilih Buku</label> 
            <select name="id_buku" id="id_buku" required> 
                <option value="">-- Pilih Buku --</option> 
                <?php  
                while ($row = mysqli_fetch_assoc($dataBuku)) { 
                    echo "<option value='{$row['id']}'>{$row['judul']}</option>"; 
                } 
                ?> 
            </select> 
            <label for="tgl_pinjam">Tanggal Pinjam</label> 
            <input type="date" name="tgl_pinjam" id="tgl_pinjam" required> 
            <label for="tgl_kembali">Tanggal Kembali</label> 
            <input type="date" name="tgl_kembali" id="tgl_kembali" required> 
            <button type="submit" class="button">Simpan</button> 
        </form> 
        <a href="Peminjaman.php" class="nav-link">← Kembali ke Data Peminjaman</a> |
        <a href="TampilanAwal.php" class="nav-link">🏠 Menu Utama</a>
    </div> 
</body> 
</html>