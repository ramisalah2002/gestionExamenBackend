<?php
namespace App\Helper;

class UserService{
    public $email , $password;

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }

    public function validateInput(){
        $validator = Validator::make(['email'=>$this->email,'password'=>$this->password]);
    }

}