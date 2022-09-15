<?php
include_once 'classes/Chicken.php';
include_once 'classes/Cow.php';
include_once 'classes/Farm.php';


function onDayBegin(Farm $farm)
{
    $farm -> harvesting ();
    $farm -> resetAnimals();
}

function initAnimals(Farm $farm)
{
    for($i = 0; $i < 10; $i++)
    {
        $farm -> addAnimal(new Cow(8));
    }
    for($i = 0; $i < 20; $i++)
    {
        $farm -> addAnimal(new Chicken(1));
    }

}

function weekEvent(Farm $farm)
{
    for($i = 0; $i < 7; $i++)
    {
        onDayBegin($farm); 
    }

}



$farm = new Farm(['milk' => 0, 'eggs' => 0]);
initAnimals($farm);
$farm -> showRegisterdAnimals();
weekEvent($farm);
$farm -> showStorage ();

for ($i = 0; $i < 5; $i++)
{
    $farm -> addAnimal(new Chicken(1));
}

$farm -> addAnimal(new Cow(8));
$farm -> showRegisterdAnimals();
weekEvent($farm);
$farm -> showStorage ();

