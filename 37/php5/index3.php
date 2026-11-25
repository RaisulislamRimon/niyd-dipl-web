<?php

use App\classes\HelloWorld;
use App\classes\Welcome;

require_once "vendor/autoload.php";

$helloWorld = new Welcome();
$helloWorld->index();