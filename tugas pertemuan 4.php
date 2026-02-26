<?php

class Mahasiswa {
    public $nama;
    public $kelas;
    public $matkul;
    public $nilai;

    
    public function statusKuis() {
        if ($this->nilai >= 60) {
            return "Lulus Kuis";
        } else {
            return "Tidak Lulus Kuis";
        }
    }
}

$dataMahasiswa = [
    [
        "nama" => "ivan",
        "kelas" => "SI 1A",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 80
    ],
    [
        "nama" => "farid",
        "kelas" => "SI 1A",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 75
    ],
    [
        "nama" => "nizar",
        "kelas" => "SI 1A",
        "matkul" => "Pemrograman Berorientasi Objek",
        "nilai" => 55
    ]
];

echo "<h1>Data Nilai PBO Mahasiswa</h1>";

foreach ($dataMahasiswa as $data) {
    $mhs = new Mahasiswa();
    $mhs->nama = $data["nama"];
    $mhs->kelas = $data["kelas"];
    $mhs->matkul = $data["matkul"];
    $mhs->nilai = $data["nilai"];

    echo "Nama : " . $mhs->nama . "<br>";
    echo "Kelas : " . $mhs->kelas . "<br>";
    echo "Mata Kuliah : " . $mhs->matkul . "<br>";
    echo "Nilai : " . $mhs->nilai . "<br>";
    echo $mhs->statusKuis();
    echo "<hr>";
}
?>