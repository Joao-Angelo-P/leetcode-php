class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    /*
    66. Plus One
    */
    function plusOne($digits) {
        $reverso = count($digits)-1;
        while ($reverso >= 0){
            if ($digits[$reverso] < 9){
            $digits[$reverso] += 1;
            return $digits;
            }
            $digits[$reverso] = 0;
            $reverso -= 1;
        }
        array_unshift($digits, 1);
        return $digits;
    }
}
