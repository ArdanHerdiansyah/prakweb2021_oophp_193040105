<?php 

class Produk {
    public  $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $waktuMain,
            $type;

    //pembuatan konstruktor
    //kenapa pake "__" karena konstruk merupakan bagian dari magic method (method spesial)
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0,
    $jmlHalaman = 0, $waktuMain = 0, $type) { 
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->type = $type;
    }

    public function getLabel() {
        // //manggil method
        // echo "Komik : " . $produk1->getLabel();
        // echo "<br>";
        // echo "Game : " . $produk2->getLabel();

        // //Menampilkan fungsi cetak
        // echo "<br>";
        // $infoProduk1 = new CetakInfoProduk();
        // echo $infoProduk1->cetak($produk1);

        // Akan menampilkan codingan diatas
        // Komik : Masashi Kishimoto, Shounen Jump
        // Game : Neil Druchman, Sony Computer
        // Naruto | Masashi Kishimoto, Shounen Jump (Rp. 30000)
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap() {
        //Codingan dibawah ini akan menampilkan..
        // Komik : Naruto | Masashi Kishimoto, Shounen Jump (Rp. 3000) - 100 halaman.
        // Game : Uncharted | Neil Druchman, Sony Computer (Rp. 250000) - 50 jam.
        $str = "{$this->type} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
        if ($this->type == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->type == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }
    
        return $str;
    }
}

//bikin kelas baru method
class CetakInfoProduk {
    public function cetak( Produk $produk ) { //type nya Produk
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druchman", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();