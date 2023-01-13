<?php
class User {
    public  $name;
    public  $age;

    // Create Constructors
    // Run when an object is created 
    public function __construct($name , $age)
    {
        $this->name= $name;
        $this->age= $age;
    }

    public function sayHello(){
        return $this->name . ' Say Hello';
    }

    // Called when other references to certain object
    // Used for cleanup, closing connection , etc
    
    public function __destruct()
    {
        echo 'destructor ran';

    }
}

// Public can access outside class 

$user1=new User('Brad', 40);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2=new User('Jafary', 89);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();


?>
