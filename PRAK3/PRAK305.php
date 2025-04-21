<!DOCTYPE html>
<html>
<head>
    <title>No5 Prak 3 Grz</title>
</head>
<body>

<form method="post">
    <input type="text" name="inputString">
    <input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST['submit'])) { // ni buat ngecek tombol submit
    $input = $_POST['inputString']; // ni buat ambil input string
    $length = strlen($input); // ni buat ngitung panjang string

    echo "<h3>Input:</h3>"; // ni buat nampilin input
    echo htmlspecialchars($input) . "<br>"; // htmlspecialchars buat ngelindungin dari XSS

    echo "<h3>Output:</h3>"; // ni buat nampilin output

    for ($i = 0; $i < $length; $i++) {
        $char = $input[$i]; // ni buat ambil karakter satu-satu
        if ($char == ' ') { // ni buat ngecek spasi
            echo "<br>"; // ni buat nambahin baris
            continue; // ni buat skip ke iterasi selanjutnya
        }
        echo strtoupper($char); // ni supaya awalnya kapital
        echo str_repeat(strtolower($char), $length - 1); // sisanya  kecil
    }
}
?>

</body>
</html>
