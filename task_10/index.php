<?php 
namespace App;
require __DIR__ . '/vendor/autoload.php';
use App\PointFunction\getMidpoint;
use App\Point;


$point1 = new Point();
$point1->x = 4;
$point1->y = 9;
$point2 = dup($point1);
 
print("point 1:  ");
print_r($point1); 
print('<br>');
print("point 2:  ");
print_r($point2); 
print('<br>');

print('<br>');
print("point1 == point2 -> ");
print_r($point1 == $point2 ? "true" : "false"); 
print('<br>');
print("point1 === point2 -> ");
print_r($point1 === $point2 ? "true" : "false"); 