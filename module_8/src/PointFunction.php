<?php

namespace App\PointFunction;

function getMidpoint($p1, $p2){
    $x = ($p1[0] + $p2[0]) / 2;
    $y = ($p1[1] + $p2[1]) / 2;
    return [$x, $y];
}