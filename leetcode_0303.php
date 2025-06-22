<?php
// 303. Range Sum Query - Immutable
class NumArray {
    /**
     * @param Integer[] $nums
     */
    function __construct($nums) {
        $this->prefixsum = [0];
        //$l = count($nums);
        $i = 1;
        $sum_ = 0;

        foreach ($nums as $n){
            $sum_ += $n;
            $this->prefixsum[$i] = $sum_;
            $i++;
        }
        
    }
  
    /**
     * @param Integer $left
     * @param Integer $right
     * @return Integer
     */
    function sumRange($left, $right) {
        return $this->prefixsum[$right + 1] - $this->prefixsum[$left];
    }
}

/**
 * Your NumArray object will be instantiated and called as such:
 * $obj = NumArray($nums);
 * $ret_1 = $obj->sumRange($left, $right);
 */
