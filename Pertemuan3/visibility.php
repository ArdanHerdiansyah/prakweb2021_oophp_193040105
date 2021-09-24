<?php 

class Produk {
    public  $judul, 
            $penulis, 
            $penerbit;
    protected $diskon = 0;

    // protected $harga; -> diguanakan untuk kelas dan turunannya
    private $harga; //berlaku untuk kelas dan tidak berlaku ke keturunannya

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $waktuMain = 0) { 
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    //diakses apabila harganya bernilai private
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
       
        return $str;
    }
}

class Komik Extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
         $jmlHalaman = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game Extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
         $waktuMain = 0) {
            parent::__construct($judul, $penulis, $penerbit, $harga);
            $this->waktuMain = $waktuMain;
    }

    // bisa diakses kalau harga nya bernilai protected
    // public function getHarga() {
    //     return $this->harga;
    // }

    public function getInfoProduk() {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) { //type nya Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druchman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();