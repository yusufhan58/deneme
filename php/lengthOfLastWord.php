<?php
function lengthOfLastWord($s)
{
    $init=0;
    if (strlen(trim($s))==0) return 0;
    for($i=0;$i<strlen($s);$i++){
        if(substr($s,$i,1)!=" ") $temp=substr($s,$init,$i-$init+1);
        else { $init=$i+1;}
    }
    echo $temp;
    return strlen($temp);
}
$a=lengthOfLastWord(" as ss");

echo $a;