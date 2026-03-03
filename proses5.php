<?php

class Pembelian {
    public $nama;
    public $kartuMember;
    public $totalBelanja;
    public $diskon = 0;
    public $totalBayar;

    public function __construct($nama, $kartuMember, $totalBelanja) {
        $this->nama = $nama;
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;
    }

    public function hitungDiskon() {

        if ($this->kartuMember == 1) {

            if ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } else if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            }

        } else {

            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            }

        }

        $this->totalBayar = $this->totalBelanja - $this->diskon;
    }

    public function tampilkanHasil() {
        echo "<h2>Hasil Pembelian</h2>";
        echo "Nama Pembeli: " . $this->nama . "<br>";
        echo "Kartu Member: " . ($this->kartuMember ? "Memiliki" : "Tidak Memiliki") . "<br>";
        echo "Total Belanja: Rp " . $this->totalBelanja . "<br>";
        echo "Diskon: Rp " . $this->diskon . "<br>";
        echo "<b>Total Bayar: Rp " . $this->totalBayar . "</b><br>";
    }
}


// Ambil data dari form
$nama = $_POST['nama'];
$kartu = $_POST['kartu'];
$total = $_POST['total'];

// Buat objek
$pembeli = new Pembelian($nama, $kartu, $total);
$pembeli->hitungDiskon();
$pembeli->tampilkanHasil();

?>