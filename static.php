<?php

// class contohStatic{
//     public static $angka = 1;

//     public static function halo(){
//         return "Halo.". self::$angka++ ." kali.";
//     }
// }

// echo contohStatic::$angka;
// echo contohStatic:: halo();
// echo "<hr>";
// echo contohStatic:: halo();

class contoh {
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . "kali. <br>";
    }
}

$obj = new contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";

$obj2 = new contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
?>