<?php

class User{
    public $name;
    public $email;
    public $password;

    function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name){
        $this->name = $name;
    }  
    function get_name(){
        return $this->name;
    }
}

$user1 = new User('brad', 'brad@gmail.com', '1234');
$user2 = new User('John', 'john@email.com', 'aasdf');

$user1->name = 'Brad';
$user2->set_name('john');
var_dump($user1);
var_dump($user2);

echo $user1->name;
echo $user2->get_name();

echo $user1->email;
echo $user2->password;

class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }

}

$employee1 = new Employee('sara', 'sara@gmaile.com', '4321', 'Maneger');

echo $employee1->get_title();
echo $employee1->get_name();





?>