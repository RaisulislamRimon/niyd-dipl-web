<?php 

namespace App\classes;

class Series 
{
	public $startingNumber, $endingNumber, $result, $output, $i;

	public function __construct($post) 
	{
		// $this->staringNumber = 5;
		// $this->endingNumber = 10;
		$this->startingNumber = $post['starting_number'];
		$this->endingNumber = $post['ending_number'];
	}

	public function makeSeries()
    {
        if($this->startingNumber > $this->endingNumber) {
           $this->output = $this->largeToSmallSeries();
        } else {
           $this->output = $this->smallToLargeSeries();
        }
        
        header("Location: web.php?page=series&&result=$this->output");       
    }

    public function smallToLargeSeries()
    {
        for($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++) {
            $this->result .= $this->i.' ';
        }

        return $this->result;
    }

    public function largeToSmallSeries()
    {
        for($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--) {
            $this->result .= $this->i.' ';
        }

        return $this->result;
    }
}