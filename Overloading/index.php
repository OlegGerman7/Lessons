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

    public function call(string $name, string $value)
    {
        if (method_exists('User', $name)){
            $this->$name($value);
        } else {
            throw new CustomException("Method: $name - not exist");
        }
    }

    public function getAll(){
        return 'Name: ' . $this->name . '<br>' .
               'Age: ' . $this->age . '<br>' .
               'Email: ' . $this->email . '<br>';
    }
}

class CustomException extends Exception
{
    public function getCustomMessage(){
        return $this->message;
    }
}

$user = new User();

try{
    $user->call('setName', 'User');
    $user->call('setAge', '20');
    $user->call('setEmail', 'user@gmail.com');
    $user->call('setName1', 'User');
} catch(CustomException $exception) {
    echo '<h2>' . $exception->getCustomMessage() . '</h2>';
}

echo $user->getAll();