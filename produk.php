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

// $produk1 = new Produk();
// $produk1->judul = "Black Clover";
// var_dump ($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Warframe";
// $produk2->tambahProperty = "test";
// var_dump ($produk2);


$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishinoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik : $produk3->penulis,$produk3->penerbit";