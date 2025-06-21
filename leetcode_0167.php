<?php
// 167. Two Sum II - Input Array Is Sorted
class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $c = 0;
        $f = count($numbers)-1;

        while (1){
            if ($numbers[$c] + $numbers[$f] < $target) $c++;
            else{
                if ($numbers[$c] + $numbers[$f] > $target) $f--;
                else{
                    return [$c + 1, $f + 1];
                }
            }
        }

    }
}
