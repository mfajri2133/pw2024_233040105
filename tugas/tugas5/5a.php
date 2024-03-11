<?php
$students = [
     [
          "name" => "Muhamad Fajri",
          "npm" => "233040105",
          "major" => "Teknik Informatika",
          "email" => "fajri.233040105@unpas.ac.id",
          "profile_picture" => "https://picsum.photos/id/232/100/100"
     ],
     [
          "name" => "Muhamad",
          "npm" => "2330401111",
          "major" => "Teknik Mesin",
          "email" => "muhamad@gmail.com",
          "profile_picture" => "https://picsum.photos/id/235/100/100"
     ],
     [
          "name" => "Jhon Doe",
          "npm" => "2330401233",
          "major" => "Teknik Industri",
          "email" => "Jhon@gmail.com",
          "profile_picture" => "https://picsum.photos/id/291/100/100"
     ],
     [
          "name" => "Carla",
          "npm" => "2330421233",
          "major" => "Teknik Lingkungan",
          "email" => "c4rla@gmail.com",
          "profile_picture" => "https://picsum.photos/id/931/100/100"
     ],
     [
          "name" => "Steve",
          "npm" => "2330431233",
          "major" => "Teknik Informatika",
          "email" => "Stev3@gmail.com",
          "profile_picture" => "https://picsum.photos/id/121/100/100"
     ],
     [
          "name" => "Mario",
          "npm" => "2330401213",
          "major" => "Teknik Industri",
          "email" => "mario0@gmail.com",
          "profile_picture" => "https://picsum.photos/id/221/100/100"
     ],
     [
          "name" => "Michelle",
          "npm" => "2330201233",
          "major" => "Teknik Industri",
          "email" => "mich1@gmail.com",
          "profile_picture" => "https://picsum.photos/id/133/100/100"
     ],
     [
          "name" => "Andreas",
          "npm" => "1930111233",
          "major" => "Teknik Pangan",
          "email" => "andreastobe@gmail.com",
          "profile_picture" => "https://picsum.photos/id/631/100/100"
     ],
     [
          "name" => "Jordan",
          "npm" => "2030401233",
          "major" => "Teknik Pangan",
          "email" => "jordaaaannn@gmail.com",
          "profile_picture" => "https://picsum.photos/id/261/100/100"
     ],
     [
          "name" => "Abdoel",
          "npm" => "2130401233",
          "major" => "Teknik Informatika",
          "email" => "abdoelduldul@gmail.com",
          "profile_picture" => "https://picsum.photos/id/131/100/100"
     ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa Unpas 2023</title>
</head>

<body>
     <h1>MAHASISWA BERPRESTASI 2024</h1>

     <ol>
          <?php
          foreach ($students as $student) {
               echo "<li> <br>
               <img src='$student[profile_picture]'> <br>
               Nama : $student[name] <br>
               NPM : $student[npm] <br>
               Jurusan : $student[major] <br>
               Email : $student[email] <br>
               </li> <br>";
          }
          ?>
     </ol>
</body>

</html>