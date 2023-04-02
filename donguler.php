<?php

    // for, while, foreach

    // for($i = 40; $i <= 100; $i += 2) {
    //     if($i % 3 == 0) {
    //         echo $i."<br>";
    //     }
    // }

    // $isimler = ["ali","ahmet","ayşe","canan","volkan"];

    // for($i=0; $i < count($isimler); $i++) {
    //     echo $isimler[$i]."<br>";
    // }

    $urunler = [
        ["iphone 14", 40000],
        ["iphone 15", 50000],
        ["iphone 16", 60000]
    ];

    // for ($i=0; $i <count($urunler); $i++) { 
    //     echo $urunler[$i][0]." ".$urunler[$i][1]."<br>";
    // }

    foreach($urunler as $urun) {
        echo $urun[0]." ".$urun[1]."<br>";
    }

?>