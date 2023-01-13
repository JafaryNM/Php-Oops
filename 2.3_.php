<?php

// Define class

class User {

    // Properties (attributies)
    public $name='Brad';
    // Method and Functions

    public function sayHello(){
        return $this->name . ' Says Hello';
    }

}
// Instatiate a user object from class
$user1=new User();
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

// Create new user

$user2=new User();
$user2->name='Jeff';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();



?>