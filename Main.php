<?php
include "Provinsi.php";

$kalimantanSelatan = new Provinsi();
$kalimantanTengah = new Provinsi();

//object
$kalimantanSelatan->namaProvinsi = "Kalimantan Selatan";
$kalimantanSelatan->setNamaIbuKota("Kota Banjarbaru");
$kalimantanSelatan->setLuas(38744);
$kalimantanSelatan->setJumlahPenduduk(4205816);

$kalimantanTengah->namaProvinsi = "Kalimantan Tengah";
$kalimantanTengah->setNamaIbuKota("Kota Palangkaraya");
$kalimantanTengah->setLuas(153564.50);
$kalimantanTengah->setJumlahPenduduk(2741100);

$kalimantanTengah->delete("Kalimantan Selatan");
echo "<br>";
echo $kalimantanTengah->namaProvinsi;
echo "<br>";
echo $kalimantanTengah->getNamaIbuKota();
