<?php
// 2016. Maximum Difference Between Increasing Elements
class Solution {
    // Time complexity: O(n) and Space complexity: O(1)
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumDifference($nums) {
        $l = count($nums);
        $r = -1;
        $number = $nums[0];
        for ($i = 1; $i < $l; $i++){
            $tmp = $nums[$i] - $number;
            if ($tmp > 0){
                if ($tmp > $r){
                    $r = $tmp;
                } 
            }else{
                $number = $nums[$i];
                }
        }
        return $r;
    }
}

class Solution2 {
    // Brute Force Solution
    // Time Complexity: O(n**2) Space Complexity: O(1)
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maximumDifference($nums) {
        $l = count($nums);
        $r = 0;
        for ($i = 0; $i < $l; $i++){
            for ($j = $i + 1; $j < $l; $j++){
                $tmp = $nums[$j] - $nums[$i];
                if ($tmp > $r){
                    $r = $tmp;
                }
                    
            }
        }
        return $r ? $r : -1;
    }
}
