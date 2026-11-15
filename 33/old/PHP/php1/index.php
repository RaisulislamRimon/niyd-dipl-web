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

$helloWorld = new HelloWorld();
$helloWorld->index();

?>