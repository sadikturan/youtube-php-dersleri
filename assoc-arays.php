<?php

    // key - value

    // 41 => kocaeli

    $plakalar = array("41","53","34");
    $sehirler = array("kocaeli","rize","istanbul");

    $plaka_bilgileri = array(
        "41" => "kocaeli",
        "34" => "istanbul",
        "53" => "rize"
    );


    echo $plaka_bilgileri["41"]."<br>";
    echo $plaka_bilgileri["34"]."<br>";
    echo $plaka_bilgileri["53"]."<br>";

    $telefon_rehberi = [
        "ali" => "444444",
        "canan" => "555555",
        "ahmet" => "666666"
    ];

    echo $telefon_rehberi["ali"]."<br>";

    $urun = [
        "urunAdi" => "IPhone 14",
        "fiyat" => 30000,
        "satistami" => true
    ];

    echo $urun["urunAdi"]." ".$urun["fiyat"]."<br>";

    $urunler = [
        [
            "urunAdi" => "IPhone 14",
            "fiyat" => 30000,
            "satistami" => true
        ],
        [
            "urunAdi" => "IPhone 15",
            "fiyat" => 40000,
            "satistami" => true
        ],
        [
            "urunAdi" => "IPhone 16",
            "fiyat" => 50000,
            "satistami" => true
        ]
    ];

    echo $urunler[0]["urunAdi"]."<br>";
    echo $urunler[1]["urunAdi"]."<br>";



?>