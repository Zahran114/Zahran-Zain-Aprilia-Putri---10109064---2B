<?php

class TokoPegadaianSyariah {
    var $namaToko = "TOKO PEGADAIAN SYARIAH";
    var $alamat = "Jl. Keadilan No.16";
    var $telepon = "Telp. 72353459";

    function tampilkanInformasiToko() {
        echo $this->namaToko . "<br>";
        echo $this->alamat . "<br>";
        echo $this->telepon . "<br>";
    }
}

class PenghitungAngsuran {
    var $besarPinjaman;
    var $besarBunga;
    var $totalPinjaman;
    var $lamaAngsuran;
    var $besarAngsuran;

    function __construct($besarPinjaman, $besarBunga, $lamaAngsuran) {
        $this->besarPinjaman = $besarPinjaman;
        $this->besarBunga = $besarBunga / 100; // Mengubah persen ke desimal
        $this->lamaAngsuran = $lamaAngsuran;
        $this->hitungTotalPinjaman();
        $this->hitungBesaranAngsuran();
    }

    function hitungTotalPinjaman() {
        $this->totalPinjaman = $this->besarPinjaman * (1 + $this->besarBunga);
    }

    function hitungBesaranAngsuran() {
        $this->besarAngsuran = $this->totalPinjaman / $this->lamaAngsuran;
    }

    function tampilkanInformasiPinjaman() {
        echo "Besaran Pinjaman : Rp. " . number_format($this->besarPinjaman, 0, ',', '.') . "<br>";
        echo "Masukan besar bunga (%): " . ($this->besarBunga * 100) . "<br>";
        echo "Total Pinjaman : Rp. " . number_format($this->totalPinjaman, 0, ',', '.') . "<br>";
        echo "Lama angsuran (bulan) : " . $this->lamaAngsuran . "<br>";
        echo "Besaran Angsuran : Rp. " . number_format($this->besarAngsuran, 0, ',', '.') . "<br>";
    }
}

// Membuat objek toko
$toko = new TokoPegadaianSyariah();
$toko->tampilkanInformasiToko();

// Membuat objek penghitung angsuran
$pinjaman = new PenghitungAngsuran(1000000, 10, 5);
$pinjaman->tampilkanInformasiPinjaman();

?>
