<?php
// Numeric Array
// $mahasiswa = [
//      ["Muhamad Fajri", "233040105", "Teknik Informatika", "fajri.233040105@unpas.ac.id"],
//      ["Muhamad", "2330401111", "Teknik Informatika", "f@gmail.com"]
// ];

// Associative Array
$mahasiswa = [
     [
          "nama" => "Muhamad Fajri",
          "npm" => "233040105",
          "jurusan" => "Teknik Informatika",
          "email" => "fajri.233040105@unpas.ac.id",
          "profile_picture" => "https://picsum.photos/id/232/100/100"
     ],
     [
          "nama" => "Muhamad",
          "npm" => "2330401111",
          "jurusan" => "Teknik Informatika",
          "email" => "muhamad@gmail.com",
          "profile_picture" => "https://picsum.photos/id/235/100/100"

     ],
     [
          "nama" => "Jhon Doe",
          "npm" => "2330401233",
          "jurusan" => "Teknik Industri",
          "email" => "Jhon@gmail.com",
          "profile_picture" => "https://picsum.photos/id/231/100/100"

     ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
</head>

<body>
     <h1>Daftar Mahasiswa</h1>
     <ul>
          <?php foreach ($mahasiswa as $mhs) : ?>
               <img src="<?= $mhs["profile_picture"]; ?>" alt="">
               <li>Nama : <?= $mhs["nama"]; ?></li>
               <li>NPM : <?= $mhs["npm"]; ?></li>
               <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
               <li>Email : <?= $mhs["email"]; ?></li>
               <br>
          <?php endforeach; ?>
     </ul>
</body>

</html>