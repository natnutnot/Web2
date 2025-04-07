<?php
$sumsangHehe = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html lang="id">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104</title>
        <style>
            tabel {
                font-family: Times New Roman;
            }
            table, th, td {
                border: 1.5px solid;
            }
        </style>
    </head>
    <body>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <tr><td><?= $sumsangHehe[0] ?></td></tr>
    <tr><td><?= $sumsangHehe[1] ?></td></tr>
    <tr><td><?= $sumsangHehe[2] ?></td></tr>
    <tr><td><?= $sumsangHehe[3] ?></td></tr>
</table>

</body>
</html>