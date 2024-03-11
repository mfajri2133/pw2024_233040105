<?php
$animals = ["😻", "🙈", "🐺", "🐶", "🦁", "🦒"];
$food = ["🍔", "🍟", "🍕", "🍣", "🍦", "🍩"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan Array</title>
</head>

<body>
     <h3>Daftar binatang</h3>
     <ol>
          <?php foreach ($animals as $animal) {
               echo "<li>$animal</li>";
          } ?>
     </ol>

     <h3>Daftar Makanan</h3>
     <ul>
          <?php for ($i = 0; $i < count($food); $i++) {
               echo "<li>$food[$i]</li>";
          } ?>
     </ul>

     <hr>

     <h3>Daftar binatang </h3>
     <ol>

          <?php
          foreach ($animals as $animal) {
               echo "<li>$animal</li>";
          }
          ?>
     </ol>
</body>

</html>