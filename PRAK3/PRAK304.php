<!DOCTYPE html>
<html>
<head>
    <title>No4 Prak 3 Grz</title>
</head>
<body>
    <?php
    $jumlah = 0;

    // Ambil jumlah dari input sebelumnya jika tersedia
    if (isset($_POST['submit'])) {
        $jumlah = (int)$_POST['jumlah'];
    }

    // Aksi tombol tambah
    if (isset($_POST['tambah'])) {
        $jumlah = (int)$_POST['jumlah'] + 1;
    }

    // Aksi tombol kurang
    if (isset($_POST['kurang'])) {
        $jumlah = (int)$_POST['jumlah'] - 1;
        if ($jumlah < 0) $jumlah = 0; // Cegah nilai negatif
    }

    // Tampilkan form input awal jika belum ada aksi
    if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])) {
    ?>
        <form method="post">
            <label>Jumlah bintang:</label>
            <input type="number" name="jumlah" min="0"> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    <?php
    } else {
        echo "<p>Jumlah bintang: <strong>$jumlah</strong></p>";

        // Tampilkan gambar bintang
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='https://upload.wikimedia.org/wikipedia/commons/4/44/Plain_Yellow_Star.png' width='50'>";
        }

        // Form untuk tambah dan kurang
        echo "
        <form method='post' style='margin-top: 20px;'>
            <input type='hidden' name='jumlah' value='$jumlah'>
            <input type='submit' name='tambah' value='Tambah'>
            <input type='submit' name='kurang' value='Kurang'>
        </form>";
    }
    ?>
</body>
</html>