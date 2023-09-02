<?php
class Kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga = 350000000;
    var $merek;
    var $tahunPembuatan;
    var $status;

    function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Mahal";
        } else {
            $status = "Murah";
        }
        return $status;
    }

    function dapatSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            return "DAPAT SUBSIDI";
        } else {
            return "TIDAK DAPAT SUBSIDI";
        }
    }

    function hargaSecondKendaraan()
    {
        $tahunSekarang = date("Y");
        $usiaKendaraan = $tahunSekarang - $this->tahunPembuatan;
        $hargaSecond = $this->harga - ($usiaKendaraan * 20000000); // Asumsi penurunan harga tiap tahun adalah 20 juta.
        return $hargaSecond;
    }
}

$objekKendaraan = new Kendaraan();
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Status Harga: " . $objekKendaraan->statusHarga();
$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "<br>";
echo "Status BBM: " . $objekKendaraan2->dapatSubsidi();
echo "<br>";
echo "Harga Bekas: " . $objekKendaraan2->hargaSecondKendaraan();
?>
