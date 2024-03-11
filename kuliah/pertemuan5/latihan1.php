<?php
// 1. membuat array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli"];

$mahasiswa = ["nama" => "Fajri", "umur" => 45, "status_kuliah" => true, "ipk" => 4.837];

// 2. mencetak isi array
echo  "$hari[2]<br>";
echo $mahasiswa['nama'];
echo "<br><hr>";

// 3. mencetak seluruh isi array, digunakan khusus debug bukan untuk user
// bisa menggunakan var_dump() atau print_r()

var_dump($hari);
echo "<br>";
var_dump($mahasiswa);
echo "<hr>";


// 4.  memanipulasi isi array

// menambah isi array di akhir / array_push
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br><hr>";
array_push($bulan, "Agustus", "September");
print_r($bulan);
echo "<br><hr>";


// Menambah di awal array / array_unshift
$mahasiswa = array_merge($mahasiswa, ["npm" => 233040105]);
print_r($mahasiswa);
echo "<br><hr>";

// Menghapus isi array diakhir / array_pop
array_pop($hari);
print_r($hari);
echo "<br><hr>";


// Menghapus isi array diawal / array_shift
array_shift($bulan);
print_r($bulan);
echo "<br><hr>";
