<?php


namespace model;


class Christmastree
{
    private $id;
    private $kind;
    private $price;

    public function __construct($id,$kind,$price){
        $this->id = $id;
        $this->kind = $kind;
        $this->price = $price;
    }
    public function getId(){
        return $this->id;
    }
    public function getKind(){
        return $this->kind;
    }
    public function getPrice(){
        return $this->price;
    }

}