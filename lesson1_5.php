<?php
$a=1;
$b=2;
$a=$a+$b; //3
$b=$a-$b; //3-2 = 1
$a=$a-$b;
var_dump($a,$b);

$x=0b001;
$y=0b010;
$x=$x^$y; //11
$y=$x^$y; //01
$x=$x^$y; //10
var_dump($x,$y);


