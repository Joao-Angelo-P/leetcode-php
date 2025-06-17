<?php
// 69. Sqrt(x)
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x < 2) return $x;
      
        if ($x % 2){
            $l = 1;
            $r = floor(($x-1)/2);
            
        }else{
            $l = 1;
            $r = floor($x/2);
        }
        while ($l <= $r){
            $meio = floor(($r+$l)/2); // or $l + floor(($r-$l)/2);
            if ($meio * $meio == $x){
                return $meio;
            }

            if ($meio * $meio < $x){
                $l = $meio + 1;
            }else{
                $r = $meio - 1;
            }
        }
        return $r;
    }
}
