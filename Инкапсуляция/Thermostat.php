<?php

class Thermostat {
    private $temperature;

    public function __construct($initialTemperature = 20) {
        $this->setTemperature($initialTemperature);
    }

    public function setTemperature($temperature) {
        if ($temperature < 10 || $temperature > 30) {
            throw new InvalidArgumentException("Температура должна быть в диапазоне от 0 до +30 градусов.");
        }
        $this->temperature = $temperature;
    }

    public function getTemperature() {
        return $this->temperature;
    }
}