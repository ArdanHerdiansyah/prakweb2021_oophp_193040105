<?php 

class Produk {
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;

    //pembuatan konstruktor
    //kenapa pake "__" karena konstruk merupakan bagian dari magic method (method spesial)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) { 
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druchman", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

//manggil method
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);