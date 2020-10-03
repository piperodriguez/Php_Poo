<?php

/**
 * Maneras de incluir otros archivos
 * include, require, require_once
 */

include 'mensaje.php';


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

echo "_____________________________\n";

//llamando metodo del archivo mensaje

echo mensaje('Felipe', 'Te mando un saludito..');

echo mensaje('Juan', 'Te mando un billetico..');



