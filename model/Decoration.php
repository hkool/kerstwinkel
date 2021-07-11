<?php


namespace model;


class Decoration
{
    private $id;
    private $color;
    private $price;

    public function __construct($id, $color, $price)
    {
        $this->id = $id;
        $this->color = $color;
        $this->price = $price;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }

}