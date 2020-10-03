<?php


class User{
  public $type;
}

class Admin{
   public function Saludar(){
	return "hello admin";
   }
}

$user = new User;
$user->type = new Admin;
echo $user->type->Saludar();



