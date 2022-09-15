<?php
include_once 'classes/Farm.php';

abstract class Animal
{
    abstract function reset();    
    abstract function gather(Farm $farm);
}