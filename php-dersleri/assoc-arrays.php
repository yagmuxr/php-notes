<?php

$plakalar = array("41", "53", "34");
$sehirler = array("kocaeli", "rize", "istanbul");

$plaka_bilgileri = array(
"41" => "kocaeli",
"34" => "istanbul",
"53" => "rize"
);

echo $plaka_bilgileri["41"]."<br>";
$urun = [
    "urunAdi" => "IPhone 14",
    "fiyat" => 300000,
    "satistami" => true
];

echo $urun["urunAdi"]." ".$urun["fiyat"]."<br>";

$urunler = [
    [
    "urunAdi" => "IPhone 14",
    "fiyat" => 300000,
    "satistami" => true
    ],
    [
        "urunAdi" => "IPhone 15",
        "fiyat" => 400000,
        "satistami" => true
    ],
    [
        "urunAdi" => "IPhone 16",
    "fiyat" => 500000,
    "satistami" => true
    ],
];

echo $urunler[0]["urunAdi"]."<br>";
 



?>