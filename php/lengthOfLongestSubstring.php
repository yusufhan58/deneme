<?php
function lengthOfLongestSubstring($s) {
    $temp='';
    $maxTemp='';
    for($i=0;$i<strlen($s);$i++)
    {
        for($k=0;$k<strlen($temp);$k++)
        {

            if(substr($s,$i,1)==substr($temp,$k,1)){
                if(strlen($maxTemp)<strlen($temp)) $maxTemp=$temp;
                if(strlen($temp)==$k+1) $temp='';
                else $temp=substr($temp,$k+1);

                break;
            }
        }
        $temp=$temp.substr($s,$i,1);
    }
    if(strlen($maxTemp)<strlen($temp)) $maxTemp=$temp;
    return strlen($maxTemp);
}
echo lengthOfLongestSubstring('bbbbbb');