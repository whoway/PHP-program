<?php
//136. 只出现一次的数字
//https://leetcode.cn/problems/single-number/submissions/
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $ret = 0;

        // 位运算
        foreach ($nums as $val){
            $ret ^= $val;
        }
        return $ret;
    }
}