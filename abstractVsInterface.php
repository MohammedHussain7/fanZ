
<?php
abstract class Vehicle {
    // Abstract Class can use abstract and concreate methods 
    // Abstract Class can use proprties
    // Abstract Class cannot be instanitated directly

    // 
    // Interface only abstract method 
    // Interface all methods shall be public
    // Interface cannot use proprties

    protected $speed;

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function getSpeed() {
        return $this->speed;
    }

    abstract public function getType();
}

class Car extends Vehicle {
    public function getType() {
        return 'Car';
    }
}

class Bike extends Vehicle {
    public function getType() {
        return 'Bike';
    }
}

$car = new Car();
$car->setSpeed(100);
echo $car->getType() . " speed: " . $car->getSpeed() . "<br>";

$bike = new Bike();
$bike->setSpeed(50);
echo $bike->getType() . " speed: " . $bike->getSpeed() . "<br>";

?>
