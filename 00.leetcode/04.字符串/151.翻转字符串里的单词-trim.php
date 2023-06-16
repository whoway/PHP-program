<?php
//trim之后必须！赋值回去
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = trim($s);
        $s .= " "; //哨兵

        $len = strlen($s);
        $mystack = [];
        $temp = "";
        for ($i = 0; $i < $len; ++$i) {
            if (" " == $s[$i] && 0 != strlen($temp)) {
                $ret .= strrev($temp);
                array_push($mystack, $temp);
                $temp = "";
            } else if (" " == $s[$i]) {
                continue;
            } else {
                $temp .= $s[$i];
            }
        }

        $ret = "";
        while (count($mystack) > 0) {
            $ret .= array_pop($mystack);
            $ret .= " ";
        }
        $ret = trim($ret);
        return $ret;
    }
}