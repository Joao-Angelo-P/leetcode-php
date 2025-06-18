<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[][]
     */
    // 2966. Divide Array Into Arrays With Max Difference
    function divideArray($nums, $k) {
        sort($nums);
        $arr = [];
        $l = count($nums)-2;
        
        for ($i = 0; $i < $l; $i+=3){
            if ($nums[$i+2] - $nums[$i] > $k) return array();
            $tmp = -1*($i);
            /*array_push($arr, 
            [$nums[$i], $nums[$i+1], $nums[$i+2]]); */ // or array_slice
            array_push($arr,
            array_slice($nums, $tmp, 3));

        }
        return $arr;
    }
}
