<?php
trait Logger {
    public function log($message) {
        print("Лог: {$message}<br>");
    }
}

class User {
    use Logger;

    public function createUser($name) {
        $this -> log("Пользователь {$name} создан.");
    }
}

class Order {
    use Logger;

    public function createOrder($orderID) {
        $this -> log("Заказ {$orderID} создан.");
    }
}

class Product {
    use Logger;

    public function createProduct($productID) {
        $this -> log("Продукт {$productID} создан.");
    }
}