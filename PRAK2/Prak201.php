<!DOCTYPE html>
<html>
<head>
    <title>Nomor 1 Modul 2 Grz</title>
</head>
<body>
    <form method="get" action="">
        Nama 1: <input type="text" name="nama1"><br>
        Nama 2: <input type="text" name="nama2"><br> 
        Nama 3: <input type="text" name="nama3"><br> 
        <button type="submit" name="urut">Urutkan</button>
    </form>

    <?php
    if (isset($_GET['urut'])) {
        $a = $_GET['nama1'];
        $b = $_GET['nama2'];
        $c = $_GET['nama3'];

        if ($a <= $b && $a <= $c) {
            echo $a . "<br>";
            if ($b <= $c) {
                echo $b . "<br>" . $c;
            } else {
                echo $c . "<br>" . $b;
            }
        } elseif ($b <= $a && $b <= $c) {
            echo $b . "<br>";
            if ($a <= $c) {
                echo $a . "<br>" . $c;
            } else {
                echo $c . "<br>" . $a;
            }
        } else {
            echo $c . "<br>";
            if ($a <= $b) {
                echo $a . "<br>" . $b;
            } else {
                echo $b . "<br>" . $a;
            }
        }
    }
    ?>
</body>
</html>
