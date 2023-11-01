<?php 

namespace AppResult;

use App\point;
use App\PointFunction\getMidpoint;

function getMidpoint(Point $p1, Point $p2){
    $x = ($p1[0] + $p2[0]) / 2;
    $y = ($p1[1] + $p2[1]) / 2;
    return [$x, $y];
}

$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;
 
$midpoint = getMidpoint($point1, $point2);
// print_r($midpoint->x); // 5.5
// print_r($midpoint->y); // 5.5