<?php
include_once 'classes/Animal.php';
include_once 'classes/Farm.php';

class Chicken extends Animal
{
    public $name = 'chicken';
    private $eggs = 0;

    public function __construct(int $eggs)
    {
        $this -> eggs = $eggs;
    }

    public function getEggs()
    {
        return $this -> eggs;
    }
    public function setEggs(int $eggs)
    {
     $this -> eggs = $eggs;
    }
    public function reset()
    {
        $this -> eggs = rand(0, 1);
    }  
    
    public function gather(Farm $farm)
    {
        $farm -> storage['eggs'] += $this -> getEggs();
        $this -> setEggs(0);
    }   
}
