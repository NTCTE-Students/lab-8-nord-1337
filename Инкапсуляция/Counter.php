<?php

class Counter {
    private $count;

    public function __construct($initialCount = 0) {
        $this->count = $initialCount;
    }

    public function increment() {
        $this->count++;
    }

    public function decrement() {
        if ($this->count > 0) {
            $this->count--;
        } else {
            throw new UnderflowException("Счётчик не может быть меньше нуля");
        }
    }

    public function getCount() {
        return $this->count;
    }
}
