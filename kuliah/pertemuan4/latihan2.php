<?php

function menghitungDuaKubus($a, $b)
{
     $vol_a = $a * $a * $a;
     $vol_b = $b * $b * $b;

     $total = $vol_a + $vol_b;

     echo $total;
}

menghitungDuaKubus(4, 9);
