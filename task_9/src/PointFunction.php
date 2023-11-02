<?php

namespace App;
use App\Point;

function getMidpoint(Point $p1, Point $p2):Point{
    $newpoint = new Point();
    $newpoint->x = ($p1->x + $p2->x) / 2;
    $newpoint->y = ($p1->y + $p2->y) / 2;
    return $newpoint;
}
