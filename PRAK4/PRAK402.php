<?php
$mahasiswa = [
    ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65], // data mhs1
    ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79], // data mhs2
    ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41], // data mhs3
    ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75], //data mhs4
];

// ni proses data nilai akhir + huruf ke masing-masing mahasiswa
foreach ($mahasiswa as &$mhs) { //supaya bisa diubah
    $nilai_akhir = 0.4 * $mhs['uts'] + 0.6 * $mhs['uas']; // rumus nilai akhir
    $mhs['nilai_akhir'] = round($nilai_akhir, 1); // dibulatkan 1 angka
    if ($nilai_akhir >= 80) $mhs['huruf'] = 'A'; //kondisi huruf
    elseif ($nilai_akhir >= 70) $mhs['huruf'] = 'B';
    elseif ($nilai_akhir >= 60) $mhs['huruf'] = 'C';
    elseif ($nilai_akhir >= 50) $mhs['huruf'] = 'D';
    else $mhs['huruf'] = 'E'; //kondisi huruf kalau nilai akhir < 50
}
unset($mhs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th {
            background-color: #d3d3d3;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: center;
        }
    </style>
</head>
<body>
    
<table>
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Nilai UTS</th>
        <th>Nilai UAS</th>
        <th>Nilai Akhir</th>
        <th>Huruf</th>
    </tr>
    <?php foreach ($mahasiswa as $mhs): ?>
        <!-- ni buat nampilin data mahasiswa -->
        <tr>
            <td><?= htmlspecialchars($mhs['nama']) ?></td>  <!-- nampilin nama -->
            <td><?= htmlspecialchars($mhs['nim']) ?></td> <!-- nampilin nim -->
            <td><?= $mhs['uts'] ?></td> <!-- nampilin uts -->
            <td><?= $mhs['uas'] ?></td> <!-- nampilin uas -->
            <td><?= $mhs['nilai_akhir'] ?></td> <!-- nampilin nilai akhir -->
            <td><?= $mhs['huruf'] ?></td>   <!-- nampilin huruf -->
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
