<?php

require_once('data.php');

// var_dump($_POST);

// die;

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


    <!-- CSS external -->
    <link rel="stylesheet" href="style/style.css">

    <title>Abdas-Keranjang</title>
</head>

<body>



    <div class="container">
        <!-- navbar -->
        <nav>
            <a href="index.php">
                <div class="navbar" id="navbar">
                    <img src="assets/img/logo.svg" class="logo">
                </div>
            </a>

            <a href="https://github.com/rezairfanwijaya/" target="blank">
                <img src="assets/img/github-dark.png" class="github img-fluid">
            </a>
        </nav>


        <!-- main konten -->
        <div class="main">


            <!-- menampilkan menu  -->
            <div class="row">
                <div class="keranjang">
                    <p class="title-main text-center">Tagihan</p>

                    <?php $totalPayment = 0; //inisialisasi total belanja dari semua item 
                    ?>

                    <br>
                    <?php foreach ($menus as $menu) : ?>

                        <?php
                        $orderCount = $_POST[$menu->getName()]; //jumlah orderan per-item
                        $menu->setOrderCount($orderCount); //memasukan jumlah orderan tadi ke function serOrderCount
                        $totalPayment += $menu->getTotalHargaItem(); //menambahkan harga total

                        ?>
                        <div class="detail-keranjang">
                            <p>
                                <?= $menu->getName() ?> X <?= $orderCount ?>
                            </p>

                            <p>Rp<?php echo number_format($menu->getTotalHargaItem(), 0, '', '.') ?></p>
                        </div>
                    <?php endforeach ?>


                    <div class="total-belanja">
                        <p class="total">Total Belanja</p>
                        <p>Rp <?= number_format($totalPayment, 0, ',', '.') ?></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- back to home -->
        <div class="back">
            <a href="index.php" class="text-decoration-none">Kembali ke menu</a>
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