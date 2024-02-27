<?php
echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
     // bisa juga menggunakan M_PI atau 3.14
     $luas = 3.14 * $r * $r;
     echo "Jari Jari = " . $r . " cm.<br>";
     echo "Luas lingkaran = " . $luas . " cm²";
}

hitungLuasLingkaran(2);


echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";

function hitungKelilingLingkaran($r)
{
     // bisa juga menggunakan M_PI atau 3.14
     $keliling = 2 * 3.14 * $r;

     echo "Jari Jari = " . $r . " cm.<br>";
     echo "Luas lingkaran = " . $keliling . " cm";
}

hitungKelilingLingkaran(20);
