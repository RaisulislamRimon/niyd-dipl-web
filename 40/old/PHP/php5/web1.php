<?php

require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
use App\classes\MakeFullName;
use App\classes\Welcome;
use App\classes\MakeSeries;

// $helloWorld = new HelloWorld();
$helloWorld = new Welcome();

echo '<pre>';
print_r($_POST);
echo '</pre>';

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
} elseif (isset($_POST['full_name_button'])) {
    $makeFullName = new MakeFullName($_POST);
    $makeFullName->getFullName();
} elseif (isset($_POST['odd_even_btn'])) {
    $oddEven = new oddEven($_POST);
    $oddEven->checkNumber();
} elseif ($_GET['page'] == 'odd-even') {
    $helloWorld->oddEven();
} elseif ($_GET['page'] == 'makeseries') {
    $series = new MakeSeries($_POST);
    $series->makeseries();
}