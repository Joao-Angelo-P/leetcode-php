class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    /*
    7. Reverse Integer
    */
    function reverse($x) {
        $negativo = false;
        $invertido = 0;
        if ($x < 0){
            $x*=-1;
            $negativo = true;
        }
        while ($x){
            $invertido = $invertido*10 + $x % 10;
            $x = floor($x/10);
        }
        $invertido = $negativo ? -1*$invertido : $invertido;
        return ($invertido < (-1*(2**31)) || $invertido > ((2**31)-1)) ? 0: $invertido;
    }
}
