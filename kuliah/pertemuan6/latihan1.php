<?php
$numbers = [
     [1, 2, 3],
     [4, 5, 6],
     [7, 8, 9]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Latihan Array</title>
     <style>
          .square {
               width: 50px;
               height: 50px;
               background-color: salmon;
               text-align: center;
               line-height: 50px;
               margin: 3px;
               float: left;
               transition: 0.5s;
          }

          .square:hover {
               transform: rotate(360deg);
               border-radius: 50%;
          }
     </style>
</head>

<body>
     <?php
     foreach ($numbers as $number) {
          foreach ($number as $n) {
               echo "<div class='square'>$n</div>";
          }
          echo "<div style='clear:both;'></div>";
     }
     ?>
</body>

</html>