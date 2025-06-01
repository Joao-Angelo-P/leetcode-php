class Solution {

    /**
     * @param Integer $n
     * @param Integer $m
     * @return Integer
     */
     // 2894. Divisible and Non-divisible Sums Difference
    function differenceOfSums($n, $m) {
        $r = 0;
        for ($i = 1; $i <= $n; $i++){
            if ($i % $m){
                $r += $i;
            }else{
                $r -= $i;
            }
        }
        return $r;
    }
}
