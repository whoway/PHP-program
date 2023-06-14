<?php
//9. 回文数
//https://leetcode.cn/problems/palindrome-number/
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if($x < 0){
            return false;
        }
        // mixed -> string
        $str = strval($x);
        $len = strlen($str);
        $left = 0;
        $right = $len-1;
        $ret = true;
        while($left < $right){
            if($str[$left] !== $str[$right]){
                $ret = false;
                break;
            }
            ++$left;
            --$right;
        }
        return $ret;
    }
}