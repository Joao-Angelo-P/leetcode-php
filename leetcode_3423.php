<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    //3423. Maximum Difference Between Adjacent Elements in a Circular Array
    function maxAdjacentDistance($nums) {
        $r = abs($nums[0] - end($nums));
        for ($i = 0; $i < count($nums) - 1; $i++){
            $d = abs($nums[$i] - $nums[$i+1]);
            if ($d > $r){
                $r = $d;
            }
        }
        return $r;
    }
}
