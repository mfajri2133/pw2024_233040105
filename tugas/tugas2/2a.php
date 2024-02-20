<?php

$front_name = "Muhamad";
$back_name = "Fajri";

for ($i = 1; $i <= 100; $i++) {
     if ($i % 3 == 0 && $i % 5 == 0) {
          echo "$front_name" . " " . "$back_name<br>";
     } elseif ($i % 5 == 0) {
          echo "$back_name<br>";
     } elseif ($i % 3 == 0) {
          echo "$front_name<br>";
     } else {
          echo "$i<br>";
     }
}
