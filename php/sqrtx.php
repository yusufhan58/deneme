<?php
function mySqrt($x) {
    $depAlt=0;
    $depUst=$x;
    $counter=(int)($x/2);
    $temp=$counter*$counter;
    if($x==1)return 1;
    while($x!=$counter*$counter) {
        if($x < $temp) {
            $depUst=$counter;
            $counter = (int)(($depAlt+$depUst)/2);
            if($depUst==$counter) return $counter;
        }
        else{
            $depAlt=$counter;
            $counter=(int)(int)(($depAlt+$depUst)/2);
            if($depAlt==$counter) return $counter;
        }
        $temp=$counter*$counter;
    }
    return $counter;
}
echo mySqrt(1);