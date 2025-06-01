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
// 876. Middle of the Linked List
class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function middleNode($head) {
        if (is_null($head->next)){
            return $head;
        }
        [$slow, $fast] = [$head, $head];
        while (!(is_null($fast->next))){
            $slow = $slow->next;
            $fast = $fast->next->next;
        }
        return $slow;
    }
}
