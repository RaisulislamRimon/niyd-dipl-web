<?php 

namespace App\classes;
use App\classes\Car;

class HelloWorld {
    public $message, $location, $city, $sayHello;  
    public $name;
 
    public function __construct() {
        $this->message = "Hello World! ";
        $this->location = 'Savar, ';
        $this->city = 'Dhaka';
    }

    public function index2() {
        echo $this->city;
    }

    public function sayHelloWorld() {
        echo ' This is showing - sayHelloWorld!';
    }

    public function index() {
        echo $this->message;
        echo $this->location;
        echo $this->city;
        // echo $this->sayHelloWorld();
        echo '<br>';
        
        $name = 100;
        echo $name;
        echo '<br>';
        
        echo gettype($name);
        echo '<br>';

        $name = 'Rimon';
        echo $name;
        echo '<br>';

        echo gettype($name);
        echo '<br>';

        $name = '123';
        echo $name;
        echo '<br>';
        echo gettype($name);
        
        echo '<br>';
        $name = '123.123';
        echo $name;
        echo '<br>';
        echo gettype($name);
        
        echo '<br>';
        $name = True;
        echo $name;
        echo '<br>';
        echo gettype($name);
        
        echo '<br>';
        $name = False;
        echo $name;
        echo '<br>';
        echo gettype($name);
        
        echo '<br>';
        $name = False;
        echo $name;
        echo '<br>';
        echo gettype($name);
        echo '<br>'; 
        
        echo '<br>';
        $name = [];
        print_r($name);
        echo '<br>';
        echo gettype($name);
        echo '<br>';

        echo '<br>';
        $name = new Car();
        echo '<br>';
        echo gettype($name);
        echo '<br>';

    }
}

?>
