<?php
use model\Model;
include_once "model/Model.php";
use view\View;
include_once "view/View.php";


class Controller
{
    private $model;
    private $view;
    public function __construct(){
        $this->model = new Model();
        $this->view = new View($this->model);
    }

    public function addTree($id, $kind, $price){
        $this->model->addTree($id,$kind,$price);
    }
    public function addDecoration($id, $color, $price){
        $this->model->addDecoration($id,$color,$price);
    }
    public function showBill(){
        $this->view->showBill();
    }
}