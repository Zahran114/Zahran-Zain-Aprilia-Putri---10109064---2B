<?php
$Z = 2;
$A = 5;
$operasi = "tambah";
$hasil = 0;

switch ($operasi) {
    case "tambah":
        $hasil = $Z + $A;
        break;
    case "kurang":
        $hasil = $Z - $A;
        break;
    case "kali":
        $hasil = $Z * $A;
        break;
    case "bagi":
        if ($A != 0) {
            $hasil = $Z / $A;
        } else {
            $hasil = "Error";
        }
        break;
}

echo "Angka 1: $Z<br>";
echo "Angka 2: $A<br>";
echo "Operasi: $operasi<br>";
echo "Hasil: $hasil<br>";
?>
