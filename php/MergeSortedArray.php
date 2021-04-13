<?php
function merge(&$nums1, $m, $nums2, $n)
{
    $c_while= 1;
    $c_num2 = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($nums1[$m - 1] <= $nums2[$c_num2]) {
            $nums1[$m] = $nums2[$c_num2];
            $m++;
            $c_num2++;
        }
        else
         {
             $nums1[$m] = $nums1[$m-1];
             $nums1[$m-1] = $nums2[$c_num2];

             while($nums2[$c_num2]<$nums1[$m-$c_while-1])
             {
                 echo var_dump($nums1)."<br>";
                 $nums1[$m-$c_while] = $nums1[$m-$c_while-1];
                 $nums1[$m-$c_while-1] = $nums2[$c_num2];
                 echo var_dump($nums1)."<br>";
                 $c_while++;
                 if($m-$c_while-1==-1){
                    break;
                 }
             }
             $m++;
             $c_num2++;
             $c_while=1;
         }
    }
    return $nums1;
}
//$nums1 = [1,2,2,3,0,0];
$nums1 = [4,5,6,0,0,0];
$nums2 = [1,2,3];
$m = 3;
$n = 3;
echo var_dump(merge($nums1, $m, $nums2, $n));