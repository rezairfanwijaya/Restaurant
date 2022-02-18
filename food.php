<?php 
// import file menu
require_once('menu.php');

// membuat class food
class Food extends Menu {
    // vairabel level pedas
    private $levelPedas;

    // constructor harus sama seperti yang di menu (class induk)
    public function __construct($name, $harga, $gambar, $levelPedas)
    {
        // overiding constructor menu (class induk)
        parent::__construct ($name, $harga, $gambar);

        // kasih nilai ke levelPedas
        $this->levelPedas = $levelPedas;
    }
    

    // ambil nilai dari level pedas
    public function getLevelPedas(){
        return $this->levelPedas;
    }
}