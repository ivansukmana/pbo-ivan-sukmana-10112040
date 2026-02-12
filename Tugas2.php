<?php

class KalkulatorSuhu {

    private $nilai;

    public function __construct($nilai) {
        $this->nilai = $nilai;
    }

    public function cToF() {
        return ($this->nilai * 9/5) + 32;
    }

    public function cToK() {
        return $this->nilai + 273.15;
    }

    public function fToC() {
        return ($this->nilai - 32) * 5/9;
    }

    public function kToC() {
        return $this->nilai - 273.15;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Suhu OOP</title>
</head>
<body>

<h2>Kalkulator Konversi Suhu</h2>

<form method="POST">
    Masukkan Nilai:
    <input type="number" name="nilai" required>
    
    <br><br>

    Pilih Konversi:
    <select name="konversi">
        <option value="cToF">Celsius ke ivan</option>
        <option value="cToK">Celsius ke Kelvin</option>
        <option value="fToC">ivan ke Celsius</option>
        <option value="kToC">Kelvin ke Celsius</option>
    </select>

    <br><br>

    <button type="submit" name="hitung">Hitung</button>
</form>

<?php
if(isset($_POST['hitung'])) {

    $nilai = $_POST['nilai'];
    $konversi = $_POST['konversi'];

    $obj = new KalkulatorSuhu($nilai);
    $hasil = $obj->$konversi();

    echo "<h3>Hasil: $hasil</h3>";
}
?>

</body>
</html>
