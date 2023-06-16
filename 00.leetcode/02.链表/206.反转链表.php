<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList($head) {
        $sentry = null;
        while(null != $head){
            $temp = $head->next;

            // 注意符号是->
            $head->next = $sentry;
            $sentry = $head;
            $head = $temp;
        }
        return $sentry;
    }
}