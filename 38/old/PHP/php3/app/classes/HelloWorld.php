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
        // test();

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
            3 => [
                'id' => 4,
                'name' => 'Rose',
                'email' => 'rose@gmail.com',
                'mobile' => '4444',
                'address' => 'Thailand',
            ],
        ];

        // return view('home', ['students' => $this->students]);
        // return view('table3', ['students' => $this->students]);
        // return view('home', ['students' => $this->students]);
        return view('table3', ['students' => $this->students]);

        // $students = $this->students;

        // include 'views/home.php';
        // include 'views/table.php';
        // include 'views/table2.php';
        // include 'views/table3.php';
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }
}

?>