<?php

namespace App;
use App\Point;

function dup(Point $point){
    $clone = new Point();
    $clone->x = $point->x;
    $clone->y = $point->y;
    return $clone;
}