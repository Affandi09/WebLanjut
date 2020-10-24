<?php namespace App\Controllers; 

class Helloworld extends BaseController 
{
    public function index($nama,$npm) 
    {
        // echo $this->name. "<br>";
        echo $nama. "<br>";
        echo $npm. "<br>";
        // echo "Hello My Name";
        
    }
    public function show() 
    {
        echo "Gilang R";
        echo "1817051075";
    }
}