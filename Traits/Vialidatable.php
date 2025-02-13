<?php

trait Validateable {
    public function validate($data, $rule = 'string'): bool {
        switch ($rule) {
            case 'string':
                return is_string($data);
            case 'int':
                return is_int($data);
            case 'email':
                return boolval(filter_var($data, FILTER_VALIDATE_EMAIL));
            default:
                return false;
        }
    }
}

class User {
    public $name;
    public $email;
    private $password;

    function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
}
class RegistrationForm extends User {
    use Validateable;

    public $is_register = false;

    public function __construct($name, $email, $password) {
        if ($this -> validate($name, 'string') && $this -> validate($email, 'email') && $this -> validate($password)) {
            $this -> is_register = true;

            parent::__construct($name, $email, $password);
        }
    }
}

class LoginForm extends User{
    use Validateable;
    public $email;
    public $password;

    protected function rules() {
        return [
            'email' => ['required', 'email'],
            'password' => ['required']
        ];
    }
}

$user = new RegistrationForm('George', 'repev.egornttek.ru', '123');

print('<pre>');
var_dump($user -> is_register);
print('---------<br>');
var_dump($user);