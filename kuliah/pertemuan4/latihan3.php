<?php

function cetak_angka($angka)
{
     for ($i = 1; $i <= $angka; $i++) {
          for ($j = 1; $j <= $i; $j++) {
               echo $i;
          }
          echo "<br>";
     }
}

cetak_angka(10);
