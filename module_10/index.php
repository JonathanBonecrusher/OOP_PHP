<?php

class Point
{
    public $x;
    public $y;
}

function dup($point){
    $new_point = new Point();
    return $new_point->$point;
}


$point1 = new Point();
$point2 = dup($point1);
 
$point1 == $point2; // true
$point1 === $point2; // false