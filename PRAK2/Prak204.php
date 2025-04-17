<!DOCTYPE html>
<html>
<head>
    <title>Nomor 4 Modul 2 Grz</title>
</head>
<body>
    <form method="post">
        Nilai : <input type="number" name="nilai" required><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $angka = $_POST['nilai'];
        $hasil = "";

        if ($angka >= 1 && $angka <= 9) {
            $hasil = "satuan";
        } elseif ($angka >= 10 && $angka <= 19) {
            $hasil = "belasan";
        } elseif ($angka >= 20 && $angka <= 99) {
            $hasil = "puluhan";
        } elseif ($angka >= 100 && $angka <= 999) {
            $hasil = "ratusan";
        } else {
            $hasil = "Anda Menginput Melebihi Limit Bilangan";
        }

        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>
