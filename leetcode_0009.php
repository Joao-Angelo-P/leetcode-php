<?php
class Solution
{
    /**
     * @param Integer $x
     * @return Boolean
     */
     /*
     9. Palindrome Number
     */
    function isPalindrome($x)
    {
        if ($x < 0 || (!($x % 10) && $x)) {
            return false;
        }

        $r = 0;
        while ($x > $r) {
            $r = $r * 10 + ($x % 10);
            $x = floor($x / 10);
        }

        return in_array($x, [$r, floor($r / 10)]);
    }
}
