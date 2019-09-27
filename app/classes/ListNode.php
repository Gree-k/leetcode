<?php

namespace app\classes;

/**
 * Class ListNode
 * @package LeetCode
 */
class ListNode
{
    /**
     * @var int
     */
    public $val = 0;

    /**
     * @var ListNode|null
     */
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}