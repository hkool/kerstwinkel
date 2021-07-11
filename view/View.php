<?php


namespace view;


class View
{
    private $model;
    public function __construct($model){
        $this->model = $model;
    }
    public function showBill(){
        $tree = $this->model->getTree();
        $decorations = $this->model->getDecorations();

        $total = $this->model->getTotalPrice();
        require "order.php";
    }

}