<!DOCTYPE html>
<html>
<head>
    <title>No3 Prak 3 Grz</title>
</head>
<body>
    <form method="post">
        Batas bawah: <input type="number" name="bawah"><br> 
        Batas atas: <input type="number" name="atas"><br> 
        <input type="submit" value="Cetak"> 
    </form>

    <?php
    if (isset($_POST['bawah']) && isset($_POST['atas'])) {
        $bawah = $_POST['bawah']; // Ambil nilai batas bawah
        $atas = $_POST['atas']; // Ambil nilai batas atas
        $i = $bawah; // Inisialisasi i dengan batas bawah

        do {
            if ((($i + 7) % 5) == 0) { // Jika i+7 habis dibagi 5
                echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='20'>";
            } else {
                echo $i . " "; // Tampilkan angka
            }
            $i++; // Increment i
        } while ($i <= $atas); // Loop sampai batas atas
    }
    ?>
</body>
</html>
