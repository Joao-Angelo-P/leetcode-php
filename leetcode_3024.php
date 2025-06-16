<?php
class Solution {
    /**
     * @param Integer[] $nums
     * @return String
     */
     /*
     3024. Type of Triangle
     */
    function triangleType($nums) {
        sort($nums);
        [$a, $b, $c]=$nums;
        if ($a + $b > $c){
            $nums = count(array_unique($nums));
            if($nums === 1){
                return "equilateral";
            }else{
                return $nums === 2 ? "isosceles": "scalene";
            }
        }else{
            return "none";
        }

    }
}
