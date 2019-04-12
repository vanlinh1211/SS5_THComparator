<?php
include "Comparable.php";

$circle1 = new Circle("circle1", 9);
$circle2 = new Circle("circle2", 8);
$compare = new ComparableTH2();

echo $compare->compareTo($circle1,$circle2);
