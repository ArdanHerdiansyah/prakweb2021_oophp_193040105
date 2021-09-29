<?php

require_once "App/init.php";

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shounen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druchman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );
// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Servis\User as ServisUser;
use App\Produk\User as ProdukUser;

new ServisUser();
echo "<hr>";
new ProdukUser();

// new App\Produk\User();
// echo "<hr>";
// new App\Servis\User();