<?php

class Node
{
    public $data;
    public $next;

    public function __construct()
    {
        $this->data = 0;
        $this->next = null;
    }
}

    function printL($x)
    {
        $temp = new Node();
        $temp = $x;
        if ($temp != null) {
            while ($temp != null) {
                echo $temp->data . " ";
                $temp = $temp->next;
            }
        } else {
            echo "The list is empty";
        }
        echo "<br>";
    }

    function deleteNode($temp)
    {
        $a = new Node();
        $init= new Node();
        $init =$temp;
        if ($temp != null) {
            while ($temp != null && $temp->next != null) {
                $a = $temp->next;
                if ($temp->data == $a->data) {
                    $temp->next = $a->next;
                    $temp=$temp->next;
                } else {
                    $temp = $temp->next;
                }
            }
        }
        return $init;
    }



$first = new Node();
$first->data = 1;
$first->next = null;

/*$second = new Node();
$second->data = 1;
$second->next = null;
$first->next = $second;*/

$third = new node();
$third->data = 2;
$third->next = null;
$first->next = $third;

$x=deleteNode($first);
printL($x);


