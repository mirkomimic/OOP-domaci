<?php

// interface, abstract class

// interface
// contract / schema
// method without body
// classes implements interfaces
// loose coupling

// interface StudentBehavior {
//   function learn($examName);
//   function goDrink($clubName);
// }

// class Student implements StudentBehavior {

//   public function learn($examName) {
//     echo "Learning " . $examName;
//   }
//   public function goDrink($clubName) {
//     echo "Drinking in " . $clubName;
//   }
// }

// $superMario = new Student();
// $superMario->learn("PHP");
// echo "<br>";
// $superMario->goDrink("club");

// -----------------------------------------

// Dogs can walk, bark and sit
// Cat can mjau, scretch and jump
// Chicken can wakeUp

// Toy store sells SnoopieType who's a dog, GarfieldType who's cat and monsterType Dog-Cat-Chicken who does all the sounds
// make interfaces and classes which implement this

// interface cannot be implemented
// class can implement 0..n interfaces
// class must implement all the methods of interface
// interface can extend an interface (retko se koristi)

interface dogBehavior {
  public function walk();
  public function bark();
  public function sit();
}
interface catBehavior {
  public function mjau();
  public function scretch();
  public function jump();
}
interface chickenBehavior {
  public function wakeUp();
}

// class Monster implements dogBehavior, catBehavior, chickenBehavior {
  
// 	public function walk() {
// 	}
	
// 	public function bark() {
// 	}
	
// 	public function sit() {
// 	}
	
// 	public function mjau() {
// 	}
	
// 	public function scretch() {
// 	}
	
// 	public function jump() {
// 	}
	
// 	public function wakeUp() {
// 	}
// }

// ----------------------------------------

// Vechicle can drive and shiftGears
// FlyingThing can fly and land
// SailingThing can float

// Implement car, helicopter, flyingCar and HoverBoatCar
// instanciate one of each and call methods

interface Vechicle {
  function drive();
  function shiftGears();
}
interface FlyingThing {
  function fly();
  function land();
}
interface SailingThing {
  function float();
}

class Car implements Vechicle {
  function drive() {
    echo "Drive";
  }
  function shiftGears() {

  }

}
class Helicopter implements FlyingThing {

	public function fly() {
    echo "Fly";
	}
	
	public function land() {
	}
}
class flyingCar implements Vechicle, FlyingThing {
  function drive() {
    echo "Drive";
  }
  function shiftGears() {
    echo "Shift Gears";
  }

  public function fly() {
	}
	
	/**
	 * @return mixed
	 */
	public function land() {
	}


}
class HoverBoatCar implements Vechicle, FlyingThing, SailingThing {
  
	public function drive() {
    echo "Drive";
	}
	
	public function shiftGears() {
	}
	
	public function float() {
	}

	public function fly() {
	}
	
	public function land() {
    echo "Land";
	}
}

// $car = new Car();
// $car->drive();
// echo "<br>";
// $helicopter = new Helicopter();
// $helicopter->fly();
// echo "<br>";
// $flyingCar = new flyingCar();
// $flyingCar->shiftGears();
// echo "<br>";
// $hoverBoatCar = new HoverBoatCar();
// $hoverBoatCar->land();

// ---------------------------------------------

// abstract class
// cannot be instanciated
// has abstract methods and methods (default ones)
// can have attributes
// class can extend only one class

// abstract class DefaultPerson{
//   abstract function walk();

//   function talk() {
//     echo "I'm talking";
//   }
// }

// class Person extends DefaultPerson {

// 	public function walk() {
// 	}
// }

// $defaultPerson = new Person();

//-------------------------------

// abstract class Animal {
//   function walk() {
//     echo "Walk on 4 legs";
//   }

//   abstract function makeASound();
// }

// class Dog extends Animal{
// 	public function makeASound() {
//     echo "Wof Wof";
// 	}
// }

// class Cat extends Animal{
// 	public function makeASound() {
//     echo "Myaww";
// 	}
// }

// $dog = new Dog();
// $dog->walk();
// $dog->makeASound();
// echo "<br>";
// $cat = new Cat();
// $cat->walk();
// $cat->makeASound();

// --------------------------------

// every toy can sing and speak
// toy has a specific sound
// dog barks, cat say myaww, moster says rrrr
// instanciate objects and make sounds

abstract class Toy {
  function sing() {
    echo "sing";
  }
  function speak() {
    echo "speak";
  }
  abstract function sound();
}

class Dog extends Toy { 
	public function sound() {
    echo "bark";
	}
}
class Cat extends Toy {  
	public function sound() {
    echo "myaww";
	}
}
class Monster extends Toy {
	public function sound() {
    echo "rrrr";
	}
}

// $dog = new Dog();
// $dog->sound();
// $dog->speak();
// echo "<br>";
// $cat = new Cat();
// $cat->sound();
// echo "<br>";
// $monster = new Monster();
// $monster->sound();

// ----------------------------------------

// Vehicle has doorStatus, hoodStatus and bootStatus - zajednicki atributi
// Vehicle has methods openAllDoors, and shift random Door, get door status
// Driving depends on the fuel type and makes a sound
// Vehicle can be electric car and gasoline car
// electric car has battery capacity, gasoline car has fuelLevel - specificni atributi
// you can ask for getRemainingMileage but it depends on fuel type

// abstract class Vehicle {
//   public $doorStatus;
//   public $hoodStatus;
//   public $bootStatus;
//   public $fuelType;

//   function openAllDoors() {
//     echo "open all doors";
//   }
//   function shiftRandomDoor() {
//     echo "shift random door";
//   }
//   function getDoorStatus() {
//     return $this->doorStatus;
//   }
//   function makeSound() {
//     echo "make sound";
//   }

//   abstract function driving($fuelType);
//   abstract function getRemainingMileage($fuelType);
// }

// class electricCar extends Vehicle {
//   private $batteryCapacity;
// 	public function driving($fuelType) {
// 	}
// 	public function getRemainingMileage($fuelType)
//   {
    
//   }
// }

// class gasolineCar extends Vehicle {
//   private $fuelLevel;
// 	public function driving($fuelType) {
// 	}
// 	public function getRemainingMileage($fuelType)
//   {
    
//   }
// }

// ---------------------------

abstract class Vehicle {
  public bool $doorStatus;
  public bool $hoodStatus;
  public bool $bootStatus;
 function getDoorStatus() {
  echo "Door status" . $this->doorStatus;
 }
 function openAllDoors() {
  $this->doorStatus = true; $this->hoodStatus = true;
 }
 function shiftRandomDoor() {
  $number = random_int(1,3);
  if ($number = 1) $this->doorStatus = !$this->doorStatus;
  // 2 numbers check
 }
 abstract function makeASound();
 abstract function getRemainingMileage();

}

class ElectricCar extends Vehicle {
  public string $batteryCapacity;
	/**
	 * @return mixed
	 */
	public function makeASound() {
    echo "...";
	}
	
	public function getRemainingMileage() {
    return $this->batteryCapacity;
	}
}

class GasolineCar extends Vehicle {

	public function makeASound() {
	}
	
	public function getRemainingMileage() {
	}
}

// ---------------------------------------

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

// igor.djuric@hotmail.rs


?>