<?php 

class Produk {
// Cara pertama bisa seperti ini
    public  $judul = "judul", 
            $penulis = "penulis", 
            $penerbit = "penerbit", 
            $harga = 0;


    // public function sayHello() {
    //     return "Hello World!";
    // }

    //Menampilkan label penulis dan penerbit secara langsung
    public function getLabel() {
        //return "$penulis, $penerbit"; //kalau begini eror, karena ini akan diasumsikan menjadi pembuatan variabel baru
        // maka harus ditulis seperti ini :
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto"; //ini merupakan timpaan judul dari "judul" 
// var_dump($produk1);

// //kalau kita buat produk 2
// $produk2 = new Produk();
// $produk2->judul = "Uncharted"; //Timpaan judul
// $produk2->tambahProperty = "hahaha"; //artinya ini menambahkan properti yang belum ada
// var_dump($produk2);

//pembuatan property
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shounen Jump";
$produk3->harga = 30000;

//kalau mau diberi label 
// echo "Komik : $produk3->penulis, $produk3->penerbit"; //ini akan memunculkan komik : Masashi Koshimoto, Shounen Jump
//Cara memanggil method
// echo $produk3->sayHello();

// bikin produk 4
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druchman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

//manggil method
echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();