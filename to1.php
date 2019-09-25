<?php
    $a = 41;
    $b = 24;
    $c = 84;
    $d = ($a > $b) ? (($a > $c)? $a : $c) : (($b>$c)? $b : $c);
    echo "a = $a <br> b = $b <br> c = $c <br> maximum Number is $d "; 
?>