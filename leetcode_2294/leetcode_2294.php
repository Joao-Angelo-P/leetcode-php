<?php
// 2294. Partition Array Such That Maximum Difference Is K
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function partitionArray($nums, $k) {
        sort($nums);
        $subarrs = 1;
        $min_ = $nums[0];

        // for loop normal crash.
        foreach ($nums as $v){
            if ($v - $min_ > $k){
                $subarrs++;
                $min_ = $v;
            }
        }
        return $subarrs;
    }
}
