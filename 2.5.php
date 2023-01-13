<?php

class User{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function getName(){
        return $this->name;
    }
    
    public function setName($name){
        $this->name=$name;
    }

    // _get magic method 
    
    public function __get($property)
    {
    
    // Checking if properties  presence 
      if (property_exists($this, $property)){
        return $this->$property;
      }  
    }

    // _set Magic Method

    public function __set($property, $value)
    {
        if(property_exists($this,$property)){
            $this->$property=$value;
        } 
        return $this;
        
    }


}

$user1= new User('John', 40);
echo 'Username ' . $user1->getName();
echo $user1->setName('Jeff');

echo '<br>';

$user1->__set('age', 50);

echo $user1->__get('name');
echo '<br>';
echo $user1->__get('age');

// echo $user1->name;






?>