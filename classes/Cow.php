<?php
include_once 'classes/Animal.php';
include_once 'classes/Farm.php';

class Cow extends Animal
{
    public $name = 'cow';
    private $milk = 0;

    public function __construct(int $milk)
    {
        $this -> milk = $milk;
    }

    public function getMilk()
    {
        return $this -> milk;
    }
    public function setMilk(int $milk)
    {
     $this -> milk = $milk;
    }
    public function reset()
    {
        $this -> milk = rand(8, 12);
    }  
     
    public function gather(Farm $farm)
    {   
        $farm -> storage['milk'] += $this -> getMilk();
        $this -> setMilk(0);
    }
}       