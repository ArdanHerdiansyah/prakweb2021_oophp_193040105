<?php

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Servis/User.php';


spl_autoload_register(function($class){
    // App\Produk\User = ["App", "Produk", "User']. karena saya mau ambil kelas User doang 
    // maka backspace nya harus ada 2 "\\" explode ('\\').
    // Explode ini digunakan untuk class yang ada namespace nya
    $class = explode('\\', $class); //explode yaitu pengambilan backspace kebelakang
    $class = end($class);
     require_once __DIR__ . '/Produk/' .$class . '.php';
});

spl_autoload_register(function($class){
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/Servis/' .$class . '.php';
});