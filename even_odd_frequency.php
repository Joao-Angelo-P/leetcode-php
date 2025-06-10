<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
// 3442. Maximum Difference Between Even and Odd Frequency
I
    function maxDifference($s) {
        $arr = [];
        [$par, $impar] = [0, 0];
        
        for ($i = 0; $i < strlen($s); $i++){
            $char = $s[$i];
            if (isset($arr[$char])){
                $arr[$char] += 1;
            }else{
                $arr[$char] = 1;
            }
        }

        foreach ($arr as $k => $v){
            if (!$par and !($v % 2)){
                $par = $v;
            }
            if (!$impar and $v % 2){
                $impar = $v;
            }

            if ($v % 2 and $v > $impar){
                $impar = $v;
            }

            if ($v % 2 === 0 and $v < $par){
                $par = $v;
            }
        }

        return $impar - $par;
    }
}
