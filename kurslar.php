<?php require_once('config.php') ?>
<?php include('partials/_db.php') ?>
<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php') ?>

<div class="container my-3">
    <div class="row">
        <div class="col-3">
            <?php include('partials/_menu.php') ?>
        </div>
        <div class="col-9">
            <?php foreach($kurslar as $kurs): ?>

                <?php if($kurs["onay"]): ?>
                    <?php include('partials/_kurs.php') ?>
                <?php endif; ?>

            <?php endforeach;?>
           
        </div>
    </div>
</div>
<?php include('partials/_footer.php') ?>


