<?php
class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($val = 0, $left = null, $right = null) {
             $this->val = $val;
             $this->left = $left;
             $this->right = $right;
         }
 }


    function isSameTree($p, $q) {
    if($p!=null && $q!=null){
        if($p->val==$q->val){
            if($p->left==$q->left){
                if($p->right==$q->right){
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }else if($p==null && $q==null) return true;
        return false;
    }
    $tree1=new TreeNode();
    $tree2=new TreeNode();

    $tree1->val=null;
    /*$tree1->val=1;
    $tree1->left=2;
    $tree1->right=0;

    $tree2->val=1;
    $tree2->left=2;
    $tree2->right=3;*/

//echo  isSameTree($tree1, $tree2);


