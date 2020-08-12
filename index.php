<?php
include 'QuadraticEquation.php';

$quadraticEquation = new QuadraticEquation(1,2,3);
$delta = $quadraticEquation->getDiscriminant();
$r1 = $quadraticEquation->getRoot1($delta);
$r2 = $quadraticEquation->getRoot2($delta);
if ($delta == 0) {
    echo $r1;
} elseif ($delta > 0) {
    echo $r1 ." va " .$r2;
} else {
    echo 'The equation has no roots';
}