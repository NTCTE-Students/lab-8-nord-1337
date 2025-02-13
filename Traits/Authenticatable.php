<?php

trait Authenticatable {
    protected $isLoggedIn = false;

    public function login($username, $password) {

        if ($this->checkCredentials($username, $password)) {
            $this->isLoggedIn = true;
            echo "User '{$username}' logged in successfully.\n";
            return true;
        } else {
            echo "Invalid credentials for user '{$username}'.\n";
            return false;
        }
    }

    public function logout() {
        if ($this->isLoggedIn) {
            $this->isLoggedIn = false;
            echo "User logged out successfully.\n";
        } else {
            echo "No user is currently logged in.\n";
        }
    }

    protected function checkCredentials($username, $password) {
        return $username === 'admin' && $password === 'password';
    }

    public function isLoggedIn() {
        return $this->isLoggedIn;
    }
}

class User {
    use Authenticatable;

    private $username;

    public function __construct($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return $this->username;
    }
}