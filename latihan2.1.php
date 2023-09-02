<?php
class Guru {
    var $nama_nama = array("de", "ce", "ve", "re");
    var $nama_guru;
    var $NIK;
    var $jabatan;
    var $alamat;
}

class Murid {
    var $nama_siswa;
    var $NIS;
    var $kelas;
    var $alamat;
}

class Kurikulum {
    var $tahun_akademik;
    var $sks_matkul;
}

class Mobil {
    var $jumlahroda = 4;
    var $warna = "Merah";
    var $bahanbakar = "Pertamax" ;
    var $harga = 12000000;
    var $Merek = 'A';
    
    public function statusharga ()
    {
        if ($this -> harga > 50000000) $status = 'Mahal' ;
        else $status = 'Murah' ;
        return $status;
    }
}

$ObjekBMW = new Mobil; //ini adalah objek BMW dari class mobil//
$ObjekTesla = new Mobil; //ini adalah objek BMW dari class mobil//
$ObjekAudi = new Mobil; //ini adalah objek BMW dari class mobil//
?>