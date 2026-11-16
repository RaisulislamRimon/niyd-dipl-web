<?php

function test()
{
    echo "Hello World, Helpers!";
}

function view($fileName, $data = [], $print = true)
{
    $view = "View Not Found";
    $filePath = "views/" . $fileName . ".php";
    if (file_exists($filePath)) {
        ob_start();
        extract($data);
        $view = ob_get_clean();
    }

    if ($print) {
        print $view;
    }
}