<?php
//链接：https://leetcode.cn/problems/count-the-digits-that-divide-a-number/solution/phpde-strvalhan-shu-de-shi-yong-by-whowa-zr4j/
// 给你一个整数 num ，返回 num 中能整除 num 的数位的数目
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function countDigits($num) {
        $len=strlen($num); //这里发生了int到string的强制转换
        $ret=0;
        // strval — 获取变量的字符串值
        $numStr = strval($num);
        for($i=0; $i<$len; ++$i){
            if( '0' != $num[$i] && 0==$numStr%$numStr[$i]  ){
                $ret++;
            }
        }
        return $ret;
    }
}
