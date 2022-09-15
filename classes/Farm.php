<?php
include_once 'classes/Animal.php';

class Farm
{
       private $animals = [];
       public $storage = [];

       public function __construct(array $storage)
       {
           $this -> storage = $storage;
       }
       public function addAnimal (Animal $animal)
       {
           $this -> animals[] = $animal;
       }

       public function resetAnimals()
       {
           foreach($this->animals as $animals)
           {
               $animals -> reset();
           }
           
       }
       public function harvesting ()
       {
           foreach($this->animals as $animals)
           {
               $animals -> gather($this);
           }
           
       }

       public function showRegisterdAnimals ()
       {
           $animalinfo =[];
           $result = '';
           foreach($this -> animals as $animal)
           {
               $name = $animal -> name;
               if(!array_key_exists($name, $animalinfo))
               {
                   $animalinfo[$name] = 1;
               }
               else
               {
                   $animalinfo[$name] += 1;
               }
           }
           foreach($animalinfo as $key => $val)
           {
               $result .= $key. ' '. $val. ' ';
           }
           echo $result. '<br>';
       }

       public function showStorage ()
       {
           $result = '';
           foreach($this -> storage as $key => $val)
           {
               $result .= $key. ' '. $val. ' ';
           }
           echo $result. '<br>';
       }
}