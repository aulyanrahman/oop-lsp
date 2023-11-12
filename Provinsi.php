<?php
//class (blueprint)
class Provinsi
{
    //property (data)
    public $namaProvinsi;
    private $namaIbuKota;
    private $luas;
    private $jumlahPenduduk;

    //method
    public function print()
    {
        echo "=== Method Print Awal ===";
        echo "<br>";
        echo "Nama Provinsi : " . $this->namaProvinsi;
        echo "<br>";
        echo "Nama Ibukota : " . $this->namaIbuKota;
        echo "<br>";
        echo "Luas : " . $this->luas;
        echo "<br>";
        echo "Jumlah Penduduk : " . $this->jumlahPenduduk;
        echo "<br>";
        echo "=== Method Print Akhir ===";
    }

    //method CRUD
    public function create()
    {
        echo "INSERT INTO provinsi VALUES(
            '$this->namaProvinsi',
            '$this->namaIbuKota',
            $this->luas,
            $this->jumlahPenduduk
        )";
    }

    public function read()
    {
        echo "SELECT * FROM provinsi";
    }

    public function update()
    {
        echo "UPDATE provinsi SET 
        namaIbuKota = '$this->namaIbuKota',
        luas = $this->luas,
        jumlahPenduduk = $this->jumlahPenduduk,
        WHERE namaProvinsi = '$this->namaProvinsi'
        ";
    }

    public function delete($namaProvinsi)
    {
        echo "DELETE FROM provinsi WHERE namaProvinsi = '$this->namaProvinsi'";
    }

    //setter
    public function setNamaIbuKota($namaIbuKota)
    {
        $this->namaIbuKota = $namaIbuKota;
    }

    public function setLuas($luas)
    {
        $this->luas = $luas;
    }

    public function setJumlahPenduduk($jumlahPenduduk)
    {
        $this->jumlahPenduduk = $jumlahPenduduk;
    }

    //getter
    public function getNamaIbuKota()
    {
        return $this->namaIbuKota;
    }

    public function getLuas()
    {
        return $this->luas;
    }

    public function getJumlahPenduduk()
    {
        return $this->jumlahPenduduk;
    }

    //constructor
    public function __construct()
    {
        echo "<br>";
        echo "=== Method Constructor Awal";
        echo "<br>";
        echo "Object dipanggil dan Constructor berjalan";
        echo "<br>";
        echo "=== Method Constructor Akhir";
        echo "<br>";
    }
}
