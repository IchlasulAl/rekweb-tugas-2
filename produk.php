<?php

// jualan produk
// komik
// game

class Produk{
    public $judul = "judul",
           $penulis = "penulis",
           $pnerbit = "penerbit",
           $harga = 0;
}

$produk1 = new Produk();

$produk1->judul = "Black Clover";

var_dump ($produk1);s