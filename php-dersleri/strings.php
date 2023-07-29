<?php

$urunAdi = 'IPhone 14';
$urunFiyati=30000;
$kdvOrani = 0.18;

$urunFiyati = $urunFiyati + ($urunFiyati * $kdvOrani);

// $sonuc = $urunAdi.' isimli urunun fiyati '.$urunFiyat.' TL.';
$sonuc = "{$urunAdi} isimli urunun fiyati {$urunFiyati} TL.";

echo $sonuc."<br>";
echo $sonuc[0]."<br>";
echo $sonuc[10]."<br>";

echo strlen($sonuc)."<br>";
echo str_word_count($sonuc)."<br>";
echo strtolower($sonuc)."<br>";
echo strtoupper($sonuc)."<br>";


?>