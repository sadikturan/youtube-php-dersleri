<?php

    $kategoriler = ["Programlama","Web Geliştirme","Mobil Uygulamalar","Ofis Uygulamalar"];
    $kurslar = [
        [
            "id" => 1,
            "baslik" => "Web Geliştirme Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "1.jpg",
            "onay" => true
        ],
        [
            "id" => 2,
            "baslik" => "Python Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "2.jpg",
            "onay" => true
        ],
        [
            "id" => 1,
            "baslik" => "Javascript Kursu",
            "aciklama" => "Güzel bir kurs",
            "resim" => "3.jpg",
            "onay" => false
        ],
    ]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">CourseApp</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kurslar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php for($i = 0; $i < count($kategoriler); $i++): ?>
                        <a href="#" class="list-group-item list-group-item-action">
                            <?php echo $kategoriler[$i]; ?>
                        </a>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="col-9">
                <?php foreach($kurslar as $kurs): ?>

                    <?php if($kurs["onay"]): ?>
                        <div class="card mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="img/<?php echo $kurs['resim'];?>" class="img-fluid rounded-start">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $kurs["baslik"]; ?>
                                        </h5>
                                        <p>
                                            <?php echo $kurs["aciklama"]; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endforeach;?>
               
            </div>
        </div>
    </div>

</body>
</html>