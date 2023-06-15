<?php
//https://leetcode.cn/problems/remove-element/
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $ret = count( $nums ) - 1;
        $cur = $ret;
        while ($cur >= 0) {
            if ($val === $nums[$cur]){
                $temp = $nums[$ret];
                $nums[$ret] = $nums[$cur];
                $nums[$cur] = $temp;
                --$ret;
            }
            --$cur;
        }
        return $ret+1;
    }
}