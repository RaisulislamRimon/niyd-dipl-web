<?php

// $data = ['name' => 'Rahim', 'city' => 'Dhaka'];

// extract($data);

// echo $name;

// echo $name;

// echo $data['name'];


use App\classes\HelloWorld;

require_once "vendor/autoload.php";

// test();
$helloWorld = new HelloWorld();
// $helloWorld->index();
// test();
// $helloWorld->contact();
// $helloWorld->about();
$helloWorld->index();