<?php

class A {
    public function A(){
        echo "I am a method with the same name as the class" . PHP_EOL;
    }
}

$a = new A ;



class User {
    private string $password = '__password__';
    public function User()
    {
        $this->password = '';
    }
    public function getPassword()
    {
        return $this->password;
    }
}
$user = new User();
var_dump($user->getPassword());