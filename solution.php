<?php 

class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {

        if (preg_match("/^$p$/", $s)) {
            return true;
        }
        return false;
        
    }
}

$matcher = new Solution();
$s = "abc";
$p = "a.*c";

if ($matcher->isMatch($s, $p)) {
    echo "Match found!";
} else {
    echo "Match not found.";
}
