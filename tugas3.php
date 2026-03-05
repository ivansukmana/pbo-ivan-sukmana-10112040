<?php

class PegadaianSyariah {

    public $pinjaman;
    public $bunga;
    public $lama;
    public $keterlambatan;

    function __construct($pinjaman,$bunga,$lama,$keterlambatan){
        $this->pinjaman = $pinjaman;
        $this->bunga = $bunga;
        $this->lama = $lama;
        $this->keterlambatan = $keterlambatan;
    }

    function totalPinjaman(){
        return $this->pinjaman + ($this->pinjaman * $this->bunga /100);
    }

    function angsuran(){
        return $this->totalPinjaman() / $this->lama;
    }

    function denda(){
        return $this->angsuran() * 0.0015 * $this->keterlambatan;
    }

    function totalBayar(){
        return $this->angsuran() + $this->denda();
    }

}

$hasil = "";

if(isset($_POST['hitung'])){

$pinjaman = $_POST['pinjaman'];
$bunga = $_POST['bunga'];
$lama = $_POST['lama'];
$keterlambatan = $_POST['keterlambatan'];

$pegadaian = new PegadaianSyariah($pinjaman,$bunga,$lama,$keterlambatan);

$totalPinjaman = $pegadaian->totalPinjaman();
$angsuran = $pegadaian->angsuran();
$denda = $pegadaian->denda();
$totalBayar = $pegadaian->totalBayar();

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Pegadaian Syariah</title>
</head>

<body>

<h2>TOKO PEGADAIAN SYARIAH</h2>
<p>Jl Keadilan No 16</p>
<p>Telp. 72353459</p>

<h3>Program Penghitung Besaran Angsuran Hutang</h3>

<form method="POST">

Besaran Pinjaman : 
<input type="number" name="pinjaman"><br><br>

Masukan besar bunga (%) : 
<input type="number" name="bunga"><br><br>

Lama angsuran (bulan) : 
<input type="number" name="lama"><br><br>

Keterlambatan Angsuran (Hari) :
<input type="number" name="keterlambatan"><br><br>

<button name="hitung">Hitung</button>

</form>

<?php if(isset($_POST['hitung'])){ ?>

<br>

Total Pinjaman : Rp <?php echo number_format($totalPinjaman,0,",","."); ?><br><br>

Besaran angsuran : Rp <?php echo number_format($angsuran,0,",","."); ?><br><br>

Keterlambatan Angsuran (Hari) : <?php echo $keterlambatan; ?><br><br>

Denda Keterlambatan : <?php echo number_format($denda,0,",","."); ?><br><br>

Besaran Pembayaran : <?php echo number_format($totalBayar,0,",","."); ?>

<?php } ?>

</body>
</html>