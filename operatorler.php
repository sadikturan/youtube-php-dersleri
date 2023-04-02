<?php

    // 1- Aritmetik 
    // echo $a + $b."<br>";
    // echo $a - $b."<br>";
    // echo $a * $b."<br>";
    // echo $a / $b."<br>";
    // echo $a % $b."<br>";
    // echo $a ** $b."<br>";
    // echo ++$a."<br>";
    

    // 2- Atama
    // $a = $a + $b;
    // $a += $b;
    // $a -= $b;
    // $a *= $b;
    // echo $a;

    // 3- Karşılaştırma
    // $a = 10;
    // $b = 5;

    // $sonuc = ($a == $b);
    // $sonuc = ($a != $b);
    // $sonuc = ($a > $b);
    // $sonuc = ($a >= $b);
    // $sonuc = ($a < $b);
    // $sonuc = ($a <= $b);

    // echo var_dump($sonuc);

    // 4- Mantıksal
    $yas = 20;
    $mezuniyet = "ilkokul";

    $sonuc = ($yas >= 18 and ($mezuniyet == "lise" or $mezuniyet=="üniversite"));
    echo var_dump($sonuc);

?>