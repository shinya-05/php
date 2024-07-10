<?php
function getSquareArea($base, $height)
{
  return $base * $height;
}
function getTriangleArea($base, $height)
{
  return $base * $height / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $height)
{
  return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquareArea(5, 5);
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);

function text($num1,$num2) {
  return $num1+$num2;
  
}

echo text(6,4);