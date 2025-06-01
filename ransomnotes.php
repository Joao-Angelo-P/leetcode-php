<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    // 383. Ransom Note
    function canConstruct($ransomNote, $magazine) {
        $m = count_chars($magazine, 1);
        $r = count_chars($ransomNote, 1);
        foreach ($r as $char => $frequencia) {
            if(!isset($m[$char]) || $m[$char] < $frequencia) {
                return false;
            }
        }
        return true;
        
    }
}
