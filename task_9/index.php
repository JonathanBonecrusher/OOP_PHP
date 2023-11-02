<?php 
namespace App;
require __DIR__ . '/vendor/autoload.php';
use App\Point;
use App\PointFunction\getMidpoint;


$point1 = new Point();
$point1->x = 1;
$point1->y = 10;
$point2 = new Point();
$point2->x = 10;
$point2->y = 1;
 
$midpoint = getMidpoint($point1, $point2);
print_r($midpoint->x); // 5.5
print('<br>');
print_r($midpoint->y); // 5.5