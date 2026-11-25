<?php

namespace App\classes;

class Car {
    public $start_time, $color, $model, $name;
    
    public function __construct() {
        $this->start_time = 'now';
        $this->color = 'Red';
        $this->model = '2027';
        $this->name = 'Elon Mask Tesla';
    }

    public function getName () {
        echo $this->name;
    }

    public function getColor () {
        echo $this->color;
    }

    public function getModel () {
        echo $this->model;
    }

    public function index() {
        echo $this->start_time;
        echo $this->color;
        echo $this->model;
        echo $this->name;
    }

    public function allInfo () {
        echo '<br>' . '<br>';
        echo 'Car Name  : ' . $this->name . '<br>';
        echo 'Car Model : ' . $this->model . '<br>';
        echo 'Car Color : ' . $this->color . '<br>';
    }


}
