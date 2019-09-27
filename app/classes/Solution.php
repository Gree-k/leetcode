<?php

namespace app\classes;

/**
 * Class Solution
 */
class Solution
{
    /**
     * @param array $nums
     * @param int $target
     * @return array
     */
    public function twoSum(array $nums, int $target): array
    {
        $data = [];
        for ($i = 0; $i < count($nums); $i++) {
            $searchNum = $target - $nums[$i];
            if (isset($data[$searchNum])) {
                return [$data[$searchNum], $i];
            }
            $data[$nums[$i]] = $i;
        }
        return [];
    }

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ListNode
    {
        $carry = 0;
        $link = $result = new ListNode(0);

        while ($l1 != null || $l2 != null) {
            $sum = $carry;
            if ($l1 != null) {
                $sum += $l1->val;
            }
            if ($l2 != null) {
                $sum += $l2->val;
            }
            $carry = (int)($sum / 10);
            $link->next = new ListNode(($sum % 10));
            $link = $link->next;

            $l1 = $l1 ? $l1->next : null;
            $l2 = $l2 ? $l2->next : null;
        }
        if ($carry) {
            $link->next = new ListNode($carry);
        }

        return $result->next;
    }
}