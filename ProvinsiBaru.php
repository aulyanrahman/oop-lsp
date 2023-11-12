<?php
include "Provinsi.php";
class ProvinsiBaru extends Provinsi
{
    private $provinsiAsal;

    //getter
    public function getProvinsiAsal()
    {
        return $this->provinsiAsal;
    }

    //setter
    public function setProvinsiAsal($provinsiAsal)
    {
        $this->provinsiAsal = $provinsiAsal;
    }

    public function print()
    {
        echo "=== Method Print Awal ===";
        echo "<br>";
        echo "Nama Provinsi :" . $this->namaProvinsi;
        echo "<br>";
        echo "Nama Ibu Kota :" . $this->getNamaIbuKota();
        echo "<br>";
        echo "Luas :" . $this->getLuas();
        echo "<br>";
        echo "Jumlah Penduduk :" . $this->getJumlahPenduduk();
        echo "<br>";
        echo "Provinsi Asal : " . $this->provinsiAsal;
        echo "<br>";
        echo "=== Method Print Akhir ===";
    }
}
