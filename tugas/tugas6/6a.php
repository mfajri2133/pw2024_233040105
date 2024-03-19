<?php
$colors = ["lightblue", "lightgreen"];
$currentColorIndex = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tugas 6a (GET)</title>
</head>

<body>
     <?php
     if (isset($_GET["number"])) {
          for ($i = $_GET["number"]; $i >= 1; $i--) {
               for ($j = 1; $j <= $i; $j++) {
                    echo "<div style='height: 50px; width: 50px; background-color:" . $colors[$currentColorIndex] . "; display: inline-block; text-align: center; line-height: 50px; border: 1px black solid; margin:2px;'>
                    $i
                    </div>
                    ";
               }
               $currentColorIndex = 1 - $currentColorIndex;
               echo "<br>";
          }
     }
     ?>
</body>

</html>