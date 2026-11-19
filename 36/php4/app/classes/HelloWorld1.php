<?php

namespace App\classes;

class HelloWorld
{
    public $message, $location, $city, $students = [];

    public function __construct()
    {
        $this->message = "Hello World! ";
        $this->location = 'Savar, ';
        $this->city = 'Dhaka';
    }

    public function index()
    {
        $this->students = [
            0 => [
                'id' => 1,
                'name' => 'Rahim',
                'email' => 'rahim@gmail.com',
                'mobile' => '1111',
                'address' => 'Dhaka',
            ],
            1 => [
                'id' => 2,
                'name' => 'Karim',
                'email' => 'karim@gmail.com',
                'mobile' => '2222',
                'address' => 'Tangail',
            ],
            2 => [
                'id' => 3,
                'name' => 'Jack',
                'email' => 'jack@gmail.com',
                'mobile' => '3333',
                'address' => 'Singapur',
            ],
        ];
        // include 'views/home.php';

        foreach ($this->students as $student) {
            echo $student;
        }

        echo '<br>';

        foreach ($this->students as $index => $b) {
            echo $index;
        }
        echo '<br>';

        foreach ($this->students as $index => $b) {
            echo $b['id'];
        }
        echo '<br>';

        foreach ($this->students as $index => $student) {
            echo $student['id'] . ' ' . $student['name'] . ' ' . $student['email'] . ' ' . $student['mobile'] . '<br>';
        }

        echo '<br>';

        foreach ($this->students as $index => $student) {
            foreach ($student as $item) {
                echo $item . ' ';
            }
            echo '<br>';
        }

        echo '<hr>';

        print_r($this->students);

        echo '<pre>';
        print_r($this->students);
        echo '</pre>';

        echo '<hr>';

        var_dump($this->students);

        echo '<pre>';
        var_dump($this->students);
        echo '</pre>';

        echo '<hr>';

        // $_ 


    }
}

?>