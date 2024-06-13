<?php

$nama = $_POST['nama'];
$angka1 = $_POST['angka1'];
$angka2 = $_POST['angka2'];

    $tambah = $angka1 + $angka2;
    $kurang = $angka1 - $angka2;
    $perkalian = $angka1 * $angka2;
    $pembagian = $angka1 / $angka2;
    $modulus = $angka1 % $angka2;

    echo "<h2>Hasil Operasi Aritmetika untuk $nama:</h2>";
    echo "<p> $angka1 + $angka2  : $tambah</p>";
    echo "<p> $angka1 - $angka2  : $kurang</p>";
    echo "<p> $angka1 * $angka2  : $perkalian</p>";
    echo "<p> $angka1 / $angka2  : $pembagian</p>";
    echo "<p> $angka1 % $angka2  : $modulus</p>";
    ?>