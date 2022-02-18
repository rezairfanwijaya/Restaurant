<?php 
// import file menu
require_once('menu.php');

// membuat class drink
class Drink extends Menu {
    // deklarasi type 
    private $type;

    // overide konstruktor dari class induk (menu)
    public function __construct($name, $harga, $gambar, $type)
    {
        // overide
        parent::__construct($name, $harga, $gambar);

        // memberi type pada objek dari class drink
        $this->type = $type;

        
    }


    // method untuk mendapatkan nilai type
    public function getType()
    {
        return $this->type;
    }


    // method untuk mengatur type minuman
    public function setType($type)
    {
        return $this->type=$type;
    }
}