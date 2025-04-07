<?php
$samsung = [
    "ini1" => "Samsung Galaxy S22",
    "kalauini2" => "Samsung Galaxy S22+",
    "nah3" => "Samsung Galaxy A03",
    "ok4" => "Samsung Galaxy Xcover 5"
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105</title>
    <style>
        table {
            font-family: "Times New Roman";
        }
        table, th, td {
            border: 1.5px solid;
        }
        th {
            background-color: red;
            color: black;
            font-size: 20px;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 8px;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <tr><td><?= $samsung["ini1"] ?></td></tr>
    <tr><td><?= $samsung["kalauini2"] ?></td></tr>
    <tr><td><?= $samsung["nah3"] ?></td></tr>
    <tr><td><?= $samsung["ok4"] ?></td></tr>
</table>

</body>
</html>
