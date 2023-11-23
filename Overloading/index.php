<?php

class User
{
    private $name;
    private $age;
    private $email;

    private function setName($name){
        $this->name = $name;
    }
    private function setAge($age){
        $this->age = $age;
    }
    private function setEmail($email){
        $this->email = $email;
    }

    public function getAll(){

        try{
            $this->setName('User');
            $this->setAge(20);
            $this->setEmail('user@gmail.com');
            $this->setTest('Test');
            return 'Name: ' . $this->name . '<br>' .
               'Age: ' . $this->age . '<br>' .
               'Email: ' . $this->email . '<br>';
        } catch(CustomException $exception) {
            echo '<h2>' . $exception->getCustomMessage() . '</h2>';
        }
    }

    public function __call($name, $arguments){
        throw new CustomException("Method: $name - not exist");
    }
}

$user = new User();

class CustomException extends Exception
{
    public function getCustomMessage(){
        return $this->message;
    }
}

echo $user->getAll();