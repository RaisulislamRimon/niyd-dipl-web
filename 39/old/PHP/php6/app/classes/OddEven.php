<?php

namespace App\classes;

class OddEven
{
    public $givenNumber, $result;

    public function __construct($post)
    {
        // $this->givenNumber = 10;
        $this->givenNumber = $post['given_number'];
    }

    public function checkNumber()
    {
        if ($this->givenNumber % 2 == 0) {
            $this->result = "The given number " . $this->givenNumber . " is Even Number";
        } else {
            $this->result = "The given number " . $this->givenNumber . " is Odd Number";
        }

        header("Location: web.php?page=odd-even&&result=$this->result");
    }
}