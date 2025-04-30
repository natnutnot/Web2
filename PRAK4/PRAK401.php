<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td {
            border: 1px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 18px;
        }
        input[type="text"], input[type="number"] {
            width: 300px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <form method="post">
        <label>Panjang : <input type="number" name="panjang" required></label><br>
        <label>Lebar : <input type="number" name="lebar" required></label><br>
        <label>Nilai : <input type="text" name="nilai" required></label><br>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
    if (isset($_POST['cetak'])) { //ngecek tombol cetak
        $panjang = (int) $_POST['panjang']; // ni buat nilai kolom / panjang
        $lebar = (int) $_POST['lebar'];     // ni buat nilai baris / lebar
        $nilai_input = $_POST['nilai'];   // ni buat nilai input
        $nilai = explode(" ", trim($nilai_input)); // pisahkan nilai input berdasarkan spasi n jadi array

        // Validasi jumlah nilai cukup
        if (count($nilai) < $panjang * $lebar) { //ni kalau nilainya kurang dari panjang x lebar, kasih ingfo
            echo "<p style='color:red;'>Jumlah nilai tidak cukup untuk membentuk matriks $lebar x $panjang.</p>";
        } else {
            echo "<table>"; //nampilin tabel
            $index = 0; // ni buat index array
            for ($i = 0; $i < $lebar; $i++) {// ni buat looping baris
                echo "<tr>"; //ni buat baris baru
                for ($j = 0; $j < $panjang; $j++) { // ni buat looping kolom
                    echo "<td>" . htmlspecialchars($nilai[$index]) . "</td>"; // ni isi pake nilai dari array
                    $index++; // ni buat lanjutin nilai 
                }
                echo "</tr>"; // ni tutup baris
            }
            echo "</table>"; // ni tutup tabel
        }
    }
    ?>
</body>
</html>