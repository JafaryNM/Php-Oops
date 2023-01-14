<?php
// Static attributes & method can be used without create object
class User {
    public $name;
    public $age;
    public static $minPassLength=6;

    public static function validatePass($pass){
        if(strlen($pass)>=self::$minPassLength){
            return true;
        }
        else{
            return false;
        }
    

}
}

$password='hello';
if(user::validatePass($password)){
    echo 'Password valid';
}
else 'Password is invalid';



?>