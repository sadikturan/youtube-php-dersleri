<?php

    $host = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "coursedb";
    
    // MYSQLi (object-oriented, procedural)
    // PDO

    $baglanti = mysqli_connect($host,$username,$password,$database);

    if(mysqli_connect_errno() > 0) {
        die("hata: ".mysqli_connect_errno());
    }

    echo "bağlantı tamam.";

    mysqli_close($baglanti);

    echo "bağlantı kapatıldı";

?>