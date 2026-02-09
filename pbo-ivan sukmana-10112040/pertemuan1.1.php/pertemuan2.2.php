<?php
class belanja // ini adalah class belanja
{
    //ini adalah variabel instance
    public string $namapembeli = "steven";
    public string $namabarang = "sabun";
    public int $hargabarang = 5000;
    public int $jumlahbarang = 2;
    public float $totalbayar;
    public float $diskon;

    //ini adalah variale static
    public static float $pajak = 0.2;

    //ini adalah variabel local
    public function __constructor($namapembeli)
    {
        $this->namapembeli = $namapembeli;
    }
    public function hitungtotal(): float
    {
        $total = $this->hargabarang * $this->jumlahbayar;
        return $total;
    }
    public function hitungdiskon(): float
    {
        $total = $this->hitungtotal() * $this->diskon;
        return $total;
    }

    public function tampilkanRincian($namapembeli)
    {
        echo "nama pembeli : " . $this->namapembeli . "<br>";
        echo "nama barang : " . $this->namabarang . "<br>";
        echo "hargabarang: " . $this->hargabarang . "<br>";
        echo "jumlahbarang: " . $this->jumlahbarang . "<br>";
        echo "total: " . $this->hitungtotal() . "<br>";
        echo "diskon: " . $this->hitungdiskon() . "<br>";
    }
}

$belanja1 = new Belanja("steven");
$belanja1->tampilkanRincian($belanja1->namapembeli);
