<?php namespace App\Controllers; 

class Hello extends BaseController 
{
    public function show() 
    {
        echo "Saya";
        //return view('welcome_messsage');
    }

    public function index($name, $npm) 
    {
        echo $name. "<br>" ;
        echo $npm;
    }
}