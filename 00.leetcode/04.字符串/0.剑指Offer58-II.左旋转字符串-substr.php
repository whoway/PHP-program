<?php
//字符串substr，php的
class Solution
{

    /**
     * @param String $s
     * @param Integer $n
     * @return String
     */
    function reverseLeftWords($s, $n)
    {
        $len = strlen($s);
        $left = substr($s, 0, $n);
        $right = substr($s, $n);
        return $right . $left;
    }
}