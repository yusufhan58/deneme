<?php
    function maxSubArray($nums) {
        $sum=0;
        $max=$nums[0];
        for($i=0;$i<sizeof($nums);$i++) {
                $sum+=$nums[$i];
                echo $sum."<br>";
                if($max<$sum) {$max=$sum;}
                if($sum<0){$sum=0;}
        }
        return $max;
    }

    $nums = array(5,4,-1,7,8);
    echo maxSubArray($nums);