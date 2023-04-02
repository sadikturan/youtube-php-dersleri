<?php

    $sayi1 = 10.2;
    $sayi2 = 20;

    echo "sonuç: ".($sayi1 + $sayi2)."<br>";
    echo "sonuç: ".($sayi1 - $sayi2)."<br>";
    echo "sonuç: ".($sayi1 * $sayi2)."<br>";
    echo "sonuç: ".($sayi1 / $sayi2)."<br>";

    echo var_dump(is_int($sayi2))."<br>";
    echo var_dump(is_int($sayi1))."<br>";
    echo var_dump(is_float($sayi1))."<br>";
    echo var_dump(is_numeric("a10"))."<br>";

    echo ceil(4.3)."<br>";
    echo ceil(4.7)."<br>";
    echo floor(4.7)."<br>";
    echo round(4.7)."<br>";
    echo round(4.4)."<br>";
    echo sqrt(25)."<br>";
    echo abs(-25)."<br>";

?>