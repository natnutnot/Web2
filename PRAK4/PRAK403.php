<!DOCTYPE html> 
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th {
            background-color: #d3d3d3;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
$data = [ //array data mhs
    [
        'nama' => 'Ridho',
        'matkul' => [
            ['mata_kuliah' => 'Pemrograman I', 'sks' => 2],
            ['mata_kuliah' => 'Praktikum Pemrograman I', 'sks' => 1],
            ['mata_kuliah' => 'Pengantar Lingkungan Lahan Basah', 'sks' => 2],
            ['mata_kuliah' => 'Arsitektur Komputer', 'sks' => 3],
        ]
    ], //data1
    [
        'nama' => 'Ratna',
        'matkul' => [
            ['mata_kuliah' => 'Basis Data I', 'sks' => 2],
            ['mata_kuliah' => 'Praktikum Basis Data I', 'sks' => 1],
            ['mata_kuliah' => 'Kalkulus', 'sks' => 3],
        ]
    ], //data2
    [
        'nama' => 'Tono',
        'matkul' => [
            ['mata_kuliah' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
            ['mata_kuliah' => 'Analisis dan Perancangan Sistem', 'sks' => 3],
            ['mata_kuliah' => 'Komputasi Awan', 'sks' => 3],
            ['mata_kuliah' => 'Kecerdasan Bisnis', 'sks' => 3],
        ]
    ] //data3
];

echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>";

$no = 1;
foreach ($data as $mhs) {
    $total_sks = array_sum(array_column($mhs['matkul'], 'sks')); //ni buat total sks
    $keterangan_text = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi"; //ni buat keterangan
    $warna = ($total_sks < 7) ? "background-color:red;color:black;" : "background-color:green;color:black;"; //ni buat warna keterangan

    foreach ($mhs['matkul'] as $index => $matkul) {
        echo "<tr>";
        echo "<td>" . ($index == 0 ? $no : "") . "</td>"; //ni buat no urut cuman di baris pertama
        echo "<td>" . ($index == 0 ? $mhs['nama'] : "") . "</td>"; //ni buat nama sekali aja
        echo "<td>{$matkul['mata_kuliah']}</td>"; //ni buat mata kuliah
        echo "<td>{$matkul['sks']}</td>"; //ni buat sks
        echo "<td>" . ($index == 0 ? $total_sks : "") . "</td>"; //ni buat total sks sekali aja
        echo "<td>" . ($index == 0 ? "<span style='$warna'>$keterangan_text</span>" : "") . "</td>"; //ni buat keterangan sekali aja
        echo "</tr>";
    }

    $no++; //lanjutin 
}
echo "</table>";
?>

</body>
</html>
