<?php

class User{
    protected $name='Brad';
    protected $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
   

}

class Customer extends User {

    private $balance;

    public function __construct($name, $age,$balance)
    {  
        parent::__construct($name,$age);
        $this->balance=$balance;
    }
    // Access Private Properties
    public function getBalance(){
        return $this->balance;
    }
 
    public function pay($amount){
        return $this->name . ' paid  $' . $amount;

    }

}
$customer1= new Customer('Jafary',90, 500);

echo $customer1->pay(100);

$customer1->getBalance();



?>

