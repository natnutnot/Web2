<!DOCTYPE html>
<html>
<head>
    <title>Nomor 2 Modul 2 Grz</title>
    <style>
        .error {
            color: red;
        }
        .star {
            color: red;
        }
    </style>
</head>
<body>

<?php
$nama = $nim = $jk = "";
$namaErr = $nimErr = $jkErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $namaErr = "* nama tidak boleh kosong";
    } else {
        $nama = htmlspecialchars($_POST["nama"]);
    }

    if (empty($_POST["nim"])) {
        $nimErr = "* nim tidak boleh kosong";
    } else {
        $nim = htmlspecialchars($_POST["nim"]);
    }

    if (empty($_POST["jk"])) {
        $jkErr = "* jenis kelamin tidak boleh kosong";
    } else {
        $jk = htmlspecialchars($_POST["jk"]);
    }

    if ($nama && $nim && $jk) {
        $output = "<h3>Output:</h3>" . $nama . "<br>" . $nim . "<br>" . $jk;
    }
}
?>

<form method="post" action="">
    <div class="form-row">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $nama; ?>">
        <span class="error"><?php echo $namaErr ? $namaErr : "*"; ?></span>
    </div>

    <div class="form-row">
        <label>Nim:</label>
        <input type="text" name="nim" value="<?php echo $nim; ?>">
        <span class="error"><?php echo $nimErr ? $nimErr : "*"; ?></span>
    </div>

    <div class="form-row">
        <label>Jenis Kelamin:</label>
        <span class="error"><?php echo $jkErr ? $jkErr : "*"; ?></span><br>
        <input type="radio" name="jk" value="Laki-laki" <?php if($jk == "Laki-laki") echo "checked"; ?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?php if($jk == "Perempuan") echo "checked"; ?>> Perempuan
    </div>

    <input type="submit" value="Submit">
</form>

<?php
if (!empty($output)) {
    echo "<br>" . $output;
}
?>

</body>
</html>
