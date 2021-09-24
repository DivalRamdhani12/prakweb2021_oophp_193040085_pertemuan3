<?php

/*Membuat file baru yaitu constant.php dan mencoba menggunakan metode constant*/


/*define('NAMA', 'Dival Ramdhani Fadillah');
echo NAMA;
echo "<br>";
const UMUR = 20;
echo UMUR;*/

/*class Coba {
    
    const NAMA = 'Dival RF';
}
echo Coba::NAMA;*/



//echo __FILE__;

/*function coba() {
    return __FUNCTION__;
}
echo coba();*/

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



?>