<?php

class KueLapis {
    var $JumlahLapis=2;
    var $WarnaLapis1="Coklat Muda";
    var $WarnaLapis2="Coklat Tua";
    var $Harga=1500000;
    var $Merek='Sultan';

    public function statusHarga ()
    {
        if($this->Harga>1000000) $status='Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$objekKueLapisOri = new KueLapis;
$objekKueLapisKismis = new KueLapis;
$objekKueLapisCoklat = new KueLapis;
$objekKueLapisPisang = new KueLapis;

echo "Status Harga : " , $objekKueLapisOri->statusHarga();

?>