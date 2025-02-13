<?php

class Animal {
    public $name;

    public function eat() {
        print("{$this->name} eated some food...<br>");
    }

    public function sleep() {
        print("{$this->name} falling asleep...<br>");
    }
}

class Bird extends Animal {
    protected $type = 'bird';
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function getInfo() {
        print("This is: {$this->type}, his name is: {$this->name} and his age is {$this->age}<br>");
    }
}

class Fish extends Animal {
    protected $type = 'fish';
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function getInfo() {
        print("This is: {$this->type}, his name is: {$this->name} and his age is {$this->age}<br>");
    }
}

class Mammal extends Animal {
    protected $type = 'mammal';
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function getInfo() {
        print("This is: {$this->type}, his name is: {$this->name} and his age is {$this->age}<br>");
    }
}

$anim1 = new Bird('Birdie', 2);
$anim2 = new Fish('Yamal', 5);
$anim3 = new Mammal('Pterosavl', 10);

$anim1 -> getInfo();
$anim1 -> eat();
$anim1 -> sleep();
$anim2 -> getInfo();
$anim2 -> eat();
$anim2 -> sleep();
$anim3 -> getInfo();
$anim3 -> eat();
$anim3 -> sleep();