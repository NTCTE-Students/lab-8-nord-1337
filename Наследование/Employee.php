<?php

class Employee {
    public $name;
    public $salary;

    public function __construct($name, $salary) {
        $this -> name = $name;
        $this -> salary = $salary;
    }

    public function getInfo() {
        print("{$this->name} {$this->salary}<br>");
    }
}

class Manager extends Employee {
    public $table;

    public function __construct($salary, $name, $table) {
        parent::__construct($name, $salary);
        $this -> table = $table;
    }

    public function getInfo() {
        print("{$this->name} {$this->salary} {$this->table}<br>");
    }
}

class Developer extends Employee {
    public $code;

    public function __construct($name, $salary, $code) {
        parent::__construct($name, $salary);
        $this -> code = $code;
    }

    public function getInfo() {
        print("{$this->name} {$this->salary} {$this->code}<br>");
    }
}

class Designer extends Employee {
    public $design;

    public function __construct($name, $salary, $design) {
        parent::__construct($name, $salary);
        $this -> design = $design;
    }

    public function getInfo() {
        print("{$this->name} {$this->salary} {$this->design}<br>");
    }
}
