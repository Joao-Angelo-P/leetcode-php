class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    /*
    509. Fibonacci Number
    */
    function fib($n) {
        [$a, $b] = [0, 1];
        if ($n==0){
            return 0;
        }
        for ($i = 2; $i <= $n; $i++){
            [$a, $b] = [$b, $a + $b];
        }
        return $b;
    }
}
