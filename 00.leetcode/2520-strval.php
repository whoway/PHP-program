<?php
//链接：https://leetcode.cn/problems/count-the-digits-that-divide-a-number/solution/phpde-strvalhan-shu-de-shi-yong-by-whowa-zr4j/
// 给你一个整数 num ，返回 num 中能整除 num 的数位的数目
class Solution {
    /**
     * @param Integer $num
     * @return Integer
     */
    function countDigits($num) {
        $len=strlen($num);
        $ret=0;
        $numStr = strval($num);

        /*
        echo $numStr;
        var_dump($numStr);
        var_dump($num);
        712
        string(3) "712"
        int(712)
        */

        for($i=0; $i<$len; ++$i){
            if( '0' != $numStr[$i] && 0 == $num % intval($numStr[$i])  ){
                ++$ret;
            }
        }
        return $ret;
    }
}