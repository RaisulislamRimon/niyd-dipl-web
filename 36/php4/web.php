<?php

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\MakeFullName;

$helloWorld = new HelloWorld();

// echo '<pre>';
// // print_r(($_GET));
// print_r(($_POST));
// // echo $_POST;
// // print_r(($_GET['id']));
// echo '</pre>';

if ($_GET['page'] == 'home') {
    $helloWorld->index();
} elseif ($_GET['page'] == 'about') {
    $helloWorld->about();
} elseif ($_GET['page'] == 'contact') {
    $helloWorld->contact();
} elseif ($_GET['page'] == 'login') {
    $helloWorld->login();
} elseif ($_GET['page'] == 'products') {
    $helloWorld->products();
} elseif ($_GET['page'] == 'read-more') {
    $helloWorld->readMore($_GET['id']);
} elseif ($_POST['full_name_button']) {
    $makeFullName = new MakeFullName($_POST);
    $makeFullName->getFullName();
}