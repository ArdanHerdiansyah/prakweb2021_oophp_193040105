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

//bikin kelas baru method
class CetakInfoProduk {
    public function cetak( Produk $produk ) { //type nya Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druchman", "Sony Computer", 250000);

//manggil method
echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();

//Menampilkan fungsi cetak
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);