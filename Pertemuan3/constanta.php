<?php

    // define('NAMA', "Ardan Herdiansyah");
    // echo NAMA;

    // echo "<br>";

    // const UMUR = 20;
    // echo UMUR;


    // class Coba {
    //     const NAMA = 'Ardan Herdiansyah';
    // }

    // echo Coba::NAMA;

    // echo __LINE__;
    // echo __FILE__;

    // function coba() {
    //     return __FUNCTION__;
    // }
    // echo coba();

    class Coba {
        public $kelas = __CLASS__;
    }

    $obj = new Coba;
    echo $obj->kelas;

?>