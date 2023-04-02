<?php

    $urunAdi = "IPhone 14";
    $urunFiyat = 30000;
    $kdvOrani = 0.18;

    $urunFiyat = $urunFiyat + ($urunFiyat * $kdvOrani);

    // $sonuc = $urunAdi." isimli ürün fiyatı ".$urunFiyat." TL.";
    $sonuc = "{$urunAdi} isimli ürün fiyatı {$urunFiyat} TL.";

    echo $sonuc."<br>";
    echo $sonuc[0]."<br>";
    echo $sonuc[10]."<br>";

    // string fonksiyonları

    echo strlen($sonuc)."<br>";
    echo str_word_count($sonuc)."<br>";
    echo strtolower($sonuc)."<br>";
    echo strtoupper($sonuc)."<br>";


?>