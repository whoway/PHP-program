<?php

class Solution
{

    /**
     * @param String $s
     * @param Integer $k
     * @return String
     */
    function reverseStr($s, $k)
    {
        $len = strlen($s);
        $ret = "";
        $left = 0;
        $right = 0;
        while ($right < $len) {
            while ($right < $len && 2 * $k != ($right - $left)) {
                ++$right;
            }
            if (2 * $k == ($right - $left)) {
                $ret .= strrev(substr($s, $left, $k));
                $ret .= substr($s, $left + $k, $k);
                $left = $right;
            }
        }

        if (2 * $k > ($right - $left) && ($right - $left) >= $k) {
            $ret .= strrev(substr($s, $left, $k));
            $ret .= substr($s, $left + $k, $right - $left - $k);
        } else if ($k > ($right - $left) && ($right - $left) > 0) {
            $ret .= strrev(substr($s, $left, $right - $left));
        }
        return $ret;
    }
}
