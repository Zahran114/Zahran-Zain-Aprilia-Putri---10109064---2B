<?php

class Mobil {
    var $JumlahRoda=4;
    var $Warna="Merah";
    var $BahanBakar="Pertamax";
    var $Harga=120000000;
    var $Merek='A';

    public function statusHarga ()
    {
        if($this->Harga>50000000) $status='Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$objekTesla = new Mobil;
$objekSupra = new Mobil;
$objekBMW = new Mobil;
$objekAudi = new Mobil;

echo "Status Harga : " , $objekAudi->statusHarga();

?>
