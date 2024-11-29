<?php

function score($score1, $score2, $score3) {
    if($score1 + $score2 + $score3 > 210) {
        echo "合格点は210点なので合格です";
    } else {
        echo "合格点は210点なので不合格です";
    }
}
score(80,80,90);

function getTriangleArea($bottom, $height) {
    return $bottom * $height / 2;
}
function getSquareArea($bottom, $height) {
    return $bottom * $height;
}
function getTrapezoidArea($bottom, $top, $height) {
    return ($bottom + $top) * $height / 2;
}
echo "<br />";
echo getTriangleArea(12,15) . "<br>";
echo getSquareArea(8,13) . "<br>";
echo getTrapezoidArea(10,8,4);



?>