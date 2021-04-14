<?php
function climbStairs($n) {
    $climb=[$n+1];
    $climb[0]=1;
    $climb[1]=1;
    for($i=2;$i<=$n;$i++){
        $climb[$i]=$climb[$i-1]+$climb[$i-2];
    }
    return $climb[$n];
}


$x=3;
echo climbStairs($x)."<br>";
$x=4;
echo climbStairs($x)."<br>";
$x=5;
echo climbStairs($x)."<br>";
$x=6;
echo climbStairs($x)."<br>";
$x=44;
echo climbStairs($x)."<br>";