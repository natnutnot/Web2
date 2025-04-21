<!DOCTYPE html>
<html>
<head>
    <title>No2 Prak 3 Grz</title>
</head>
<body>
    <form method="post">
        Tinggi :
        <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
        Alamat Gambar :
        <input type="text" name="gambar" value="<?= isset($_POST['gambar']) ? $_POST['gambar'] : '' ?>"><br> 
        <input type="submit" value="Cetak"> 
    </form>

    <br>

    <?php
    if (isset($_POST['tinggi']) && isset($_POST['gambar'])) { // Cek apakah form sudah disubmit
        $tinggi = $_POST['tinggi']; // Ambil tinggi dari input
        $gambar = $_POST['gambar']; // Ambil alamat gambar dari input

        for ($i = $tinggi; $i >= 1; $i--) { // Loop dari tinggi ke 1
            // ni buat spasi
                for ($spasi = 1; $spasi <= ($tinggi - $i); $spasi++) { 
                echo "<span style='display: inline-block; width: 50px;'></span>"; 
            }

            // ni nyetak gambar
            for ($j = 1; $j <= $i; $j++) {
                echo "<img src='$gambar' width='50'>";
            }
            echo "<br>"; // Pindah ke baris berikutnya
        }
    }
    ?>
</body>
</html>
