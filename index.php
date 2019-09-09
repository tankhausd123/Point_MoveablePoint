<?php
include_once "Point.php";
include_once "MoveablePoint.php";

$point = new Point(10,20);
echo $point->toString();

$moveablePoint = new MoveablePoint(100, 200, 1,2);
echo $moveablePoint->toString();
echo $moveablePoint->move();