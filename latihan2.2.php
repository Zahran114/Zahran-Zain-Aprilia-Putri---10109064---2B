<?php
class Orang {
    var $PembeliKe=13;
    var $Nama_Pembeli="Zahran Zain Aprilia Putri";
    var $Alamat="Bandung";
    var $Jumlah_Pembelian=200000;
    var $JudulBuku='About Us';
    var $tahunterbit =2022;

    public function statusHarga ()
    {
        if ($this-> Jumlah_Pembelian > 150000) $status='Membeli Banyak';
        else $status = 'Membeli Sedikit';
        return $status;
    }
}

$objekDiktadanHukum = new Orang;
$objekPulangPergi = new Orang;
$objekSerangkai = new Orang;
$objekHilmyMilan = new Orang;

echo "Status Harga : " , $objekPulangPergi->statusHarga();

class Buku {
    var $jumlahhalaman=132;
    var $judulbuku="About Us";
    var $pengarang="Adi K";
    var $Harga=50000;
    var $penerbit='Alex Media Komputido';
    var $tahunterbit =2022;

    public function statusHarga ()
    {
        if ($this-> Harga > 150000) $status='Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$objekDiktadanHukum = new Buku;
$objekPulangPergi = new Buku;
$objekSerangkai = new Buku;
$objekHilmyMilan = new Buku;

echo "Status Harga : " , $objekPulangPergi->statusHarga();

?>