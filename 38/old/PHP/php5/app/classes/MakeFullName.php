<?php

namespace App\classes;

class MakeFullName
{
    public $firstName, $lastName, $result;

    public function __construct($post)
    {
        // $this->firstName = "Rimon";
        // $this->lastName = "!";
        $this->firstName = $post['first_name'];
        $this->lastName = $post['last_name'];
    }

    public function getFullName()
    {
        $this->result = $this->firstName . " " . $this->lastName;
        // echo $this->result;
        header("Location: web.php?page=contact&&result=$this->result");
    }
}