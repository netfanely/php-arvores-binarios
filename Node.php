<?php
class Node {

    public $leftNode;
    public $rightNode;

    public function setLeftNode($node){
       $this->leftNode = $node;
    }
    public function setRightNode($node){
       $this->rightNode = $node;
    }
    public function getLeftNode(){
       return $this->leftNode;
    }
    public function getRightNode(){
       return $this->rightNode;
    }
    public function isLeaf(){
        return $this->leftNode === null && $this->rightNode === null;
    }
}
?>