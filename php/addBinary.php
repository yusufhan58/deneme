<?php
function addBinary($a, $b) {
    $tempDiff="0";
    $result="";
    $temp="";
    $container=0;
    $tempBig=(strlen($a)>strlen($b)?$a:$b);
    $tempLit=(strlen($a)>strlen($b)?$b:$a);
    if(strlen($a)!=strlen($b))
    {
        $temp=$tempLit;
        for($i=0;$i<strlen($tempBig)-strlen($tempLit);$i++){$temp=$tempDiff.$temp;}
        $tempLit=$temp;
    }


    for($i=strlen($tempBig)-1;$i>=0;$i--)
    {
        $b=substr($tempBig,$i,1);
        $l=substr($tempLit,$i,1);
        $sum=(int)$b+(int)$l+$container;
        echo $sum;
        $container=0;
        if($sum>=2)
        {
            $sum=$sum%2;
            $container=1;
        }
        $result.=(String)$sum;
    }
    if($container==1)  $result.=(String)$container;
    return strrev($result);
}
$result=addBinary("1","111");
echo $result;
