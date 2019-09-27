<?php

use app\classes\ListNode;
use app\classes\Solution;
use app\Helper;

require __DIR__ . '/vendor/autoload.php';

$solution = new Solution();

$nums = [2, 7, 4, 2, 14, 6,];
$result = $solution->twoSum($nums, 9);
Helper::print($result);


$l1 = new ListNode(2);
$l1->next = new ListNode(4);
$l1->next->next = new ListNode(3);

$l2 = new ListNode(5);
$l2->next = new ListNode(6);
$l2->next->next = new ListNode(4);

$start = microtime(true);
$result = $solution->addTwoNumbers($l1, $l2);
$time = (microtime(true) - $start) / 1000;

Helper::print($result);
Helper::print($time);
