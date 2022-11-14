<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // Properties are attributes that belong to a class
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs whe an object is created
    public function __construct($name, $email, $password) {
        // echo 'constructor ran';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method is a function that belongs to a class
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

// Instantiate a user object
$user1 = new User('Marc', 'marcdwest@gmail.com', 'password');
$user2 = new User('Mike', 'mikeninjaturtle@gmail.com', 'password');
// $user1->name = 'Marc';
// $user1->set_name('Marc');
// echo $user1->get_name();
// $user2->set_name('Mike');
// echo $user2->email;
// var_dump($user1, $user2);

// Inheritance
class Employee extends user {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Jean', 'Jean@phoenix.com', 'password83', 'Phoenix');
echo $employee1->get_title();
echo $employee1->get_name();

