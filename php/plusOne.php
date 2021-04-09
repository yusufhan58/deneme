<?php

function plusOne($digits)
{
    $i = sizeof($digits);
    $y = array(0);
    $counter = 0;
    for ($x = $i - 1; $x >= 0; $x--) {
        if ($x == $i - 1 && $digits[$x] == 9) $counter = 1;
        if ($digits[$x] == 9 && $counter != 0) {
            if ($digits[$x] == 9) {
                $digits[$x] = 0;
            }
            if ($counter == sizeof($digits)) {
                $digits = array_merge($digits, $y);
                $digits[$x] = 1;

            } else if ($digits[($x - 1)] != 9) {
                $digits[$x - 1] = $digits[$x - 1] + 1;
                return $digits;
                echo $digits[$x] . "<br>";
            }
            $counter++;
        } else if ($counter == 0) {
            $digits[$x] = $digits[$x] + 1;
            return $digits;
        }
    }
    return $digits;
}

$a = array(9, 9);
$b = plusOne($a);
for ($i = 0; $i < sizeof($b); $i++)
    echo "<BR>" . $b[$i];