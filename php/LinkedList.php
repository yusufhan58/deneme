<?php
class Node
{
    public $data ;
    public $next ;
    public function __construct()
    {
        $this->data = 0;
        $this->next = null;
    }
    public function  setData($data){
        $this->val=$data;
    }
    public function setNext($next){
        $this->next=$next;
    }
    public function getValue(){
        return $this->data;
    }
    public function getNext(){
        return $this->next;
    }

}
class linkedList
{
    public $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function printL()
    {
        $temp = new Node();
        $temp = $this->head;
        if($temp!=null){
            while($temp!=null)
            {
                echo $temp->data." ";
                $temp = $temp->next;
            }
        }else{
            echo "The list is empty";
        }
        echo "<br>";
    }
        public function deleteNode(){
            $temp = new Node();
            $a = new Node();
            $temp = $this->head;
            if($temp!=null){
                while($temp!=null && $temp->next!=null)
                {
                    $a=$temp->next;
                    if($temp->data==$a->data){
                        $temp->next=$a->next;
                    }else{
                        $temp = $temp->next;
                    }
                }
            }
        }

}

$myList=new linkedList();

$first=new Node();
$first->data=1;
$first->next=null;
$myList->head=$first;

$second=new Node();
$second->data=1;
$second->next=null;
$first->next=$second;

$third=new node();
$third->data=2;
$third->next=null;
$second->next=$third;

$myList->printL();
$myList->deleteNode();
$myList->printL();


