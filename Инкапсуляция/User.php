<?php

class User {
    private $username;
    private $password;

    public function __construct($username) {
        $this->username = $username;
    }

    public function setPassword($password) {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function checkPassword($password) {
        return password_verify($password, $this->password);
    }

    public function getUsername() {
        return $this->username;
    }
}
