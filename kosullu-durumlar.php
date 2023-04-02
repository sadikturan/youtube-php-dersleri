<?php

    $db_username = "sadikturan";
    $db_password = "1234";

    // if($db_username == "sadikturan" and $db_password=="1234") {
    //     // true bloğu çalışır
    //     echo "username veya parola doğru";
    // } else {
    //     // false bloğu çalışır
    //     echo "username veya parola yanlış";
    // }


    // if($db_username == "sadikturan") {

    //     if($db_password=="12345") {
    //         echo "giriş başarılı";
    //     } else {
    //         echo "parola yanlış";
    //     }

    // } else {
    //     echo "username yanlış";
    // }

    if($db_username != "sadikturan") {
        echo "username yanlış";
    } elseif($db_password!="1234") {
        echo "parola yanlış";
    } else {
        echo "giriş başarılı";
    }


?>