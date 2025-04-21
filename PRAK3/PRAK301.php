<!DOCTYPE html>
<html>
<head>
    <title>No1 Prak 3 Grz</title>
</head>
<body>
    <form method="post"> 
        Jumlah Peserta :
        <input type="number" name="jumlah" value="<?= isset($_POST['jumlah']) ? $_POST['jumlah'] : '' ?>"> <br>
        <input type="submit" value="Cetak"> 
    </form>

    <?php
    if (isset($_POST['jumlah'])) { // Cek apakah form sudah disubmit
        $jumlah = $_POST['jumlah']; // Ambil jumlah peserta dari input
        $i = 1;  // Inisialisasi i dengan 1
        // ni buat looping dari 1 sampe jumlah peserta
        while ($i <= $jumlah) { 
            // ni ganjil merah
            if ($i % 2 == 1) {
                echo "<h2 style='color:red'>Peserta ke-$i</h2>";
            } else { //yang ini ijo
                echo "<h2 style='color:green'>Peserta ke-$i</h2>";
            }
            $i++; // Increment i
        }
    }
    ?>
</body>
</html>
