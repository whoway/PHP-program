<?php

//链接：https://leetcode.cn/problems/remove-trailing-zeros-from-a-string/solution/phpde-ti-jie-strlenhan-shu-by-whoway-6bqp/
// 知识点，strlen作用于字符串
// 给你一个用字符串表示的正整数 num
// 请你以字符串形式返回不含尾随零的整数 num
class Solution {

    /**
     * @param String $num
     * @return String
     */
    function removeTrailingZeros($num) {
        $len = strlen($num);
        $result = '';
        for ($right = $len-1; $right >=0; --$right) {
            if ($num[$right] == '0' ) {
                continue;
            } else {
                for($i=0; $i<=$right; ++$i){
                    $result .= $num[$i];
                }
                break;
            }
        }
        return $result;
    }
}

