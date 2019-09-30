<?php

// define('NAMA', 'Sandhika galih');

// echo NAMA;

// const UMUR = 32;

// echo UMUR;

// class cob {
//     const NAMA = 'Sandhika';
// }

// echo cob::NAMA;

// echo __FILE__;

// function coba (){
//     return __FUNCTION__;
// }

// echo coba();

class coba{
    public $kelas = __CLASS__;
}
$obj = new coba();
echo $obj->kelas;
?>