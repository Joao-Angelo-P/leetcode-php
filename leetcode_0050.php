<?php
// 50. Pow(x, n)
class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        $pow = 1;
        $negativo = false;
        if (!$n) return 1.0;
        if ($n < 0){
            $n *= -1;
            $negativo = true;
        }
        //$n = abs($n); 
        while ($n){
            if ($n % 2){
                $pow *= $x;
            }
            $x *= $x;
            $n = floor($n/2);
        }
        return $negativo ? 1/$pow: $pow; // $negativo
    }
}
