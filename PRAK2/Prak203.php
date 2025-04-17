<!DOCTYPE html>
<html>
<head>
    <title>Nomor 3 Modul 2 Grz</title>
</head>
<body>
    <form method="post">
        Nilai : <input type="number" name="nilai" required><br>
        Dari : <br>
        <input type="radio" name="dari" value="celcius" required> Celcius<br>
        <input type="radio" name="dari" value="fahrenheit"> Fahrenheit<br>
        <input type="radio" name="dari" value="reamur"> Reamur<br>
        <input type="radio" name="dari" value="kelvin"> Kelvin<br>
        Ke : <br>
        <input type="radio" name="ke" value="celcius" required> Celcius<br>
        <input type="radio" name="ke" value="fahrenheit"> Fahrenheit<br>
        <input type="radio" name="ke" value="reamur"> Reamur<br>
        <input type="radio" name="ke" value="kelvin"> Kelvin<br><br>

        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        switch ($dari) {
            case "celcius":
                $celcius = $nilai;
                break;
            case "fahrenheit":
                $celcius = ($nilai-32)*5/9;
                break;
            case "reamur":
                $celcius = $nilai*5/4;
                break;
            case "kelvin":
                $celcius = $nilai-273.15;
                break;
        }

        switch ($ke) {
            case "celcius":
                $hasil = $celcius;
                break;
            case "fahrenheit":
                $hasil = ($celcius*9/5)+32;
                break;
            case "reamur":
                $hasil = $celcius*4/5;
                break;
            case "kelvin":
                $hasil = $celcius+273.15;
                break;
        }

        echo "<h2>Hasil Konversi: " . round($hasil, 1) . " &deg;" . strtoupper(substr($ke, 0, 1)) . "</h2>";
    }
    ?>
</body>
</html>
