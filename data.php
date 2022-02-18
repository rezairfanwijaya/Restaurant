<?php 
// import file drink dan food
require_once ('drink.php');
require_once ('food.php');

// membuat objek
$jus = new Drink('JUS', 25000, 'jus.png', 'Dingin');
$coffee = new Drink('COFFEE', 18000, 'coffee.png', 'Panas' );
$bakso = new Food('BAKSO', 15000, 'bakso.png', 5);
$mieAyam = new Food('MIE', 10000, 'mieayam.png', 3);
$boba = new Drink('BOBA', 15000, 'boba.png', 'Dingin');


// menampung objek pada array agar bisa di cetak ke html
$menus = array($jus, $coffee, $bakso, $mieAyam, $boba);