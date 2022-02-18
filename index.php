<?php
// import data.php
require_once('data.php');
// import menu.php
require_once('menu.php');
?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.svg">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- CSS external -->
    <link rel="stylesheet" href="style/style.css">

    <title>Abdas-Restaurant</title>
</head>

<body>

    <!-- float button -->
    <a href="#navbar">
        <div class="float-botton" data-aos="fade-left" data-aos-duration="990">
            <ion-icon name="chevron-up-outline"></ion-icon>
        </div>
    </a>
    <!-- float button -->

    <div class="container">
        <!-- navbar -->
        <nav>
            <a href="index.php">
                <div class="navbar" id="navbar">
                    <img src="assets/img/logo.svg" class="logo">
                </div>
            </a>

            <a href="https://github.com/rezairfanwijaya/Restaurant" target="blank">
                <img src="assets/img/github-dark.png" class="github img-fluid">
            </a>
        </nav>


        <!-- main konten -->
        <div class="main">
            <p class="title-main text-center">Abdas <span>Restaurant</span></p>

            <!-- total menu -->
            <h4 class="total-menu text-center text-white my-5">Total Menu : <span><?= Menu::getTotalProduk() ?></span></h4>

            <!-- menampilkan menu  -->
            <form action="confirm.php" method="POST">
                <div class="row">
                    <?php foreach ($menus as $menu) : ?>
                        <div class="col-12 col-md-6 col-lg-2 menu">
                            <!-- gambar menu -->
                            <img src="assets/img/<?= $menu->getImage() ?>">

                            <!-- nama menu -->
                            
                                <h4 class="list-menu text-center"><span><?= $menu->getName() ?></span></h4>
                            
                            <!-- kita seleksi jika menu adalah instanceof nyari drink maka tampilkan type,jika itu instanceof dari food maka tampilkan level kepedasan -->

                            <?php if ($menu instanceof Drink) : ?>
                                <!-- type menu -->
                                <p class="text-center text-white my-4"><?= $menu->getType() ?></p>

                            <?php else : ?>

                                <!-- Level Pedas dengan gambar -->
                                <div class="level-pedas">
                                    <?php for ($i = 0; $i < $menu->getLevelPedas(); $i++) : ?>

                                        <img src="assets/img/levelPedas.png" class="lvl-pedas">

                                    <?php endfor ?>
                                </div>


                            <?php endif ?>


                            <!-- harga menu -->
                            <h6 class="harga text-center text-muted">Rp <?= number_format($menu->getHarga(), 0, ',', '.') ?></h6>

                            <!-- jumlah pesanan -->
                            <div class="order">
                                <p class="text-muted text-center mt-2">Qty: </p>
                                <input type="text" name="<?= $menu->getName() ?>" value="<?= $menu->getoderCount() ?>">
                            </div>
                        </div>
                    <?php endforeach ?>
                    <!-- tombol pesan -->
                </div>
                <input value="Pesan" type="submit" id="pesan">
            </form>
        </div>



    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>