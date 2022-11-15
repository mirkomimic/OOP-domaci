<?php

// domaci

// cartoon character can walk and jump 
// based on their type they make different sounds -- abstract class
// The Simpsons have their catch phrase, as well as Loonie Tunes and Disney characters -- types
// SchoolKids are type of Simpsons, Rabbits are part of Loonie Tunes and princess are part of the Disneys - ekstenzije tipova
// Learning is reading and memorizing -- radnje interfejs
// Playing is running -- interfejs
// Going back to life is standingUp and shinning -- ponasanje, samo za princeze
// SchoolKids can play and learn, Rabits can play, princesses can do all
// make Bart, Bugs Bunny and Cinderella as instances

abstract class CartoonCharacter {
  function walk() {
    echo "walking";
  }
  function jump() {
    echo "jumping";
  }
  abstract function sound();
}

interface Learning {
  function reading();
  function memorizing();
}
interface Playing {
  function running();
}
interface GoingBackToLife {
  function standingUp();
  function shinning();
}

abstract class Simpsons extends CartoonCharacter {
  function sound() {
    echo "D'oh!";
  }
}
abstract class LoonieTunes extends CartoonCharacter {
  function sound() {
    echo "What's up, doc?";
  }
}
abstract class DisneyCharacters extends CartoonCharacter {
  function sound() {
    echo "Even miracles take a little time.";
  }
}

class SchoolKids extends Simpsons implements Learning, Playing {
  function reading(){ echo "Reading school book"; }
  function memorizing(){ echo "Memorizing from school book"; }
  function running(){ echo "Running 8 mph."; }
}
class Rabbits extends LoonieTunes implements Playing {
  function running(){ echo "Running 24 mph."; }
}
class Princesses extends DisneyCharacters implements Learning, Playing, GoingBackToLife {
  function reading(){ echo "Reading a fairy tale"; }
  function memorizing(){ echo "Memorizing fairy tale"; }
  function running(){ echo "Running 6.5 mph."; }
  function standingUp(){ echo "Standing up";}
  function shinning(){ echo "Shinning"; }
}

$bart = new SchoolKids();
$bugsBunny = new Rabbits();
$cinderella = new Princesses();

$bart->walk();
echo "<br>";
$bart->sound();
echo "<br>";
$bart->reading();
echo "<hr>";

$bugsBunny->sound();
echo "<br>";
$bugsBunny->running();
echo "<hr>";

$cinderella->sound();
echo "<br>";
$cinderella->standingUp();
?>