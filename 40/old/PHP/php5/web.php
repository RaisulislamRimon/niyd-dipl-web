<?php

require_once 'vendor/autoload.php';
use App\classes\MakeFullName;
use App\classes\Welcome;
use App\classes\Series;
use App\classes\OddEven;

$welcome = new Welcome();

// echo '<pre>';
// print_r($_POST);
// echo '</pre>';


if (isset($_GET['page'])) {

    if ($_GET['page'] == 'home') {
        $welcome->index();
    } elseif ($_GET['page'] == 'about') {
        $welcome->about();
    } elseif ($_GET['page'] == 'contact') {
        $welcome->contact();
    } elseif ($_GET['page'] == 'login') {
        $welcome->login();
    } elseif ($_GET['page'] == 'products') {
        $welcome->products();
    } elseif ($_GET['page'] == 'portfolio') {
        $welcome->portfolio();
    } elseif ($_GET['page'] == 'odd-even') {
        $welcome->oddEven();
    } elseif($_GET['page'] == 'service') {
        $welcome->service();
    }  elseif ($_GET['page'] == 'series') {
        $welcome->series();
    } elseif ($_GET['page'] == 'read-more') {
        $welcome->readMore($_GET['id']);
    } 

} elseif (isset($_POST['full_name_button'])) {
    $makeFullName = new MakeFullName($_POST);
    $makeFullName->getFullName();
} elseif ( isset($_POST['odd_even_btn']) ) {
    $oddEven = new OddEven($_POST);
    $oddEven->checkNumber();
} elseif( isset($_POST['series_btn']) ) {
    $series = new Series($_POST);
    $series->makeSeries();
}
