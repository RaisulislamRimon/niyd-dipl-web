<?php 

namespace App\classes;
use App\classes\Car;

class HelloWorld {
    public $message, $location, $city, $sayHello, $data = [], $student = [], $students = [];  
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


        $this->data = [10, 20, 30, 40, 'Rimon, 12.4', true];

        echo '<br>';
        echo $this->data;
        echo '<br>';
        echo $this->data[0];
        echo '<br>';
        echo $this->data[1];
        echo '<br>';
        echo gettype($this->data);
        echo '<br>';
        foreach ($this->data as $item) {
            echo $item . ' ';
        }
        echo '<br>';
        echo gettype($data);
        echo '<br>';
        echo gettype($this->data);
        print_r($this->data);
        echo '<br>';


        // $this->students = [
        //     'Rimon', 
        //     'rimon@gmail.com', 
        //     '123'
        // ];


        $this->student = [
            'name' => 'Rimon', 
            'email' => 'rimon@gmail.com', 
            'phone' => '123'
        ];
    
        echo $this->student[0];
        echo $this->student['name'];
        echo '<br>';

        $this->students = [
            0 => [
                'name' => 'Rimon', 
                'email' => 'rimon@gmail.com', 
                'phone' => '123'
            ],
            1 => [
                'name' => 'Rahim', 
                'email' => 'rahim@gmail.com', 
                'phone' => '123'
            ],
            2 => [
                'name' => 'Karim', 
                'email' => 'karim@gmail.com', 
                'phone' => [
                    'personal' => '123',
                    'guardian' => '456'
                ]
            ],
        ];

        echo $this->students[0]['name'];
        echo '<br> Output: ' . $this->students[0]['name']. '<br>';

        echo $this->students[2]['email'];
        echo '<br>';

        echo $this->students[2]['phone']['personal'];

        echo '<br>';

        foreach ($this->students as $student) {
            echo '<br>';
            echo 'Output Line - 161: <br>';
            echo $student['name'] . $student['email'];
            echo '<br>';
        }

    }
}

?>
