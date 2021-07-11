<?php


namespace model;
include_once "model\Christmastree.php";
include_once "model\Decoration.php";

class Model
{
    private $tree;
    private $decorations = array();

    public function addTree($id, $kind,$price){
        $this->tree = new Christmastree($id,$kind,$price);
    }

    public function addDecoration($id, $color,$price){
        $decoration = new Decoration($id,$color,$price);
        $this->decorations[] = $decoration;
    }

    public function getTotalPrice(){
        $total = $this->tree->getPrice();
        foreach($this->decorations as $decoration){
            $total += $decoration->getPrice();
        }
        return $total;
    }

    public function getTree(){
        return $this->tree;
    }

    public function getDecorations(){
        return $this->decorations;
    }

}