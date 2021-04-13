<?php

class ListNode
{
    public $val;
    public $next;

    public function __construct()
    {
        $this->val = 0;
        $this->next = null;
    }
}

function deleteNode($temp)
{
    $a = new ListNode();
    $init= new ListNode();
    $init =$temp;
    if ($temp != null) {
        while ($temp != null && $temp->next != null) {
            $a = $temp->next;
            if ($temp->val == $a->val) {
                $temp->next = $a->next;
            } else {
                $temp = $temp->next;

            }
        }
    }
    return $init;
}



$first = new ListNode();
$first->val = 1;
$first->next = null;

$second = new ListNode();
$second->val = 1;
$second->next = null;
$first->next = $second;

$third = new ListNode();
$third->val = 1;
$third->next = null;
$second->next = $third;

$fourth = new ListNode();
$fourth->val = 1;
$fourth->next = null;
$third->next = $fourth;

echo var_dump($first);
$x=deleteNode($first);
echo var_dump($x);
