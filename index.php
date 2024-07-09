<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');


//php-7.4  bool(true) int(12345) bool(false) bool(true) 
//php-8.2  bool(true) int(12345) bool(false) bool(false) 

$x = 1;
$y = 2;

$x = $x+$y;// = 30
$y = $x - $y;// = 30 - 20 =10
$x = $x - $y; // 30 -10 = 20

echo "x={$x}, y={$y}";