<?php

// 方法1:库函数
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function replaceSpace($s)
    {
        //库函数，匹配后置换
        return str_replace(" ", "%20", $s);
    }
}

//方法2:原地
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function replaceSpace($s)
    {
        $len = strlen($s);
        for ($i = 0; $i < $len; ++$i) {
            if (" " == $s[$i]) {
                $s .= "00"; //扩容
            }
        }

        $newlen = strlen($s);
        $cur = $len - 1;
        $newlen = $newlen - 1;
        while ($cur >= 0) {
            if (" " == $s[$cur]) {
                $s[$newlen--] = "0";
                $s[$newlen--] = "2";
                $s[$newlen--] = "%";
            } else {
                $s[$newlen--] = $s[$cur];
            }
            --$cur;
        }

        return $s;
    }
}