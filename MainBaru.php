<?php
include "ProvinsiBaru.php";

$pb = new ProvinsiBaru();
$pb->setNamaIbuKota("Nusantara");
$pb->setProvinsiAsal("Kalimantan Timur");
$pb->setLuas(123);
$pb->setJumlahPenduduk(321);
$pb->namaProvinsi = "Bontang";
$pb->print();
