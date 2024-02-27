<?php
function urutanAngka($angka)
{
     $start = 1;
     for ($i = 1; $i <= $angka; $i++) {
          for ($j = 1; $j <= $i; $j++) {
               echo $start++ . " ";
          }
          echo "<br>";
     }
}

urutanAngka(2);
