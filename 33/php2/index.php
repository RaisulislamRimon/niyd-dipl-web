<?php

// echo "Hello World PHP!!!"

// function helloWorld() {
//     echo "Hello World Function";
// }

// helloWorld();

// class HelloWorld {
//     public $message;

//     public function __construct() {
//         $this->message = "Hello World Class!";
//     }

//     public function index() {
//         echo $this->message;
//     }
// }

// $helloworld = new HelloWorld();
// $helloworld->index();


require_once "vendor/autoload.php";
use App\classes\HelloWorld;
use App\classes\Car;

$helloWorld = new HelloWorld();
$helloWorld->sayHelloWorld();
$helloWorld->index();
// $helloWorld->index2();
$car = new Car();
$car->index();
$car->getName();
$car->getModel();
$car->getColor();

$car->allInfo();

?>