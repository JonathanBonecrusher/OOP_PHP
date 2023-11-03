<?php 
namespace App;
require __DIR__ . '/vendor/autoload.php';
use App\Rational;

$rat1 = new Rational(10, 2);
print('First rational: ');
print_r($rat1->getNumer()); // 10
print('  ');
print_r($rat1->getDenom()); // 2
print('<br>');
print('<br>');

$rat2 = new Rational(14, 5);
print('Second rational: ');
print_r($rat2->getNumer()); // 14
print('  ');
print_r($rat2->getDenom()); // 5
print('<br>'); 
print('<br>');


$rat3 = $rat1->add($rat2); // Абстракция для рационального числа 78/10
print('Add rationals: ');
print_r($rat3->getNumer()); // 78
print('  ');
print_r($rat3->getDenom()); // 10
print('<br>');
print('<br>');

$rat4 = $rat1->sub($rat2); // Абстракция для рационального числа 22/10
print('Sub rationals: ');
print_r($rat4->getNumer()); // 22
print('  ');
print_r($rat4->getDenom()); // 10