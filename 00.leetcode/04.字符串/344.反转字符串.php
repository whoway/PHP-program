<?php
// php  count
class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $len = count($s);
        $left = 0;
        $right = $len-1;
        $ret = true;
        while($left < $right){
            $temp = $s[$right];
            $s[$right] = $s[$left];
            $s[$left] = $temp;
            ++$left;
            --$right;
        }

        return ;
    }
}