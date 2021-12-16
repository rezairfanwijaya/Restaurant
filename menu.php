<?php
// membuat class menu
class Menu
{
    // memiliki property public name
    // public $name;
    // ubah jadi private
    protected $name;

    // memiliki property public harga
    // ubah jadi private
    // public $harga;
    protected $harga;

    // memiliki property public gambar
    // ubah jadi private
    // public $gambar;
    protected $gambar;

    // memiliki property private orderCount dengan nilai awal 0
    private $orderCount = 0;

    // menambahkan property class untuk menghitung jumlah menu yang tersedia
    protected static $totalMenu = 0;


    // memiliki constructor dengan parameter name,harga,gambar
    public function __construct($name, $harga, $gambar)
    {
        // memberi nama pada tiap-tiap objek
        $this->name = $name;

        // memberi harga pada tiap-tiap objek
        $this->harga = $harga;

        // memberi gambar pada tiap-tiap objek
        $this->gambar = $gambar;

        // meningkatkan jumlah totalMenu ketika ada menu baru yang ditambahkan
        self::$totalMenu++;
    }

    // karena property name,harga dan gambar di private,maka untuk mengakses property tersebut dari luar class menu kita membutuhkan method getter

    // method getter untuk mengambil nama
    public function getName()
    {
        return $this->name;
    }

    // method getter untuk mengambil gambar
    public function getImage()
    {
        return $this->gambar;
    }

    // method getter untuk mengambil harga
    public function getHarga()
    {
        return $this->harga;
    }

    // method getter untuk orderCount
    public function getoderCount()
    {
        return $this->orderCount;
    }

    // method setter untuk orderCount
    public function setOrderCount($orderCount)
    {
        $this->orderCount = $orderCount;
    }

    // method total harga per produk
    public function getTotalHargaItem()
    {
        return $this->harga * $this->orderCount;
    }

    // function untuk mengambil jumlah produk yang tersedia
    public static function getTotalProduk(){
        return self::$totalMenu;
    }

   
}
