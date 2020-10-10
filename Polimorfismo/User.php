<?php
require_once 'abstract/Base.php';
class User extends Base
{
    public function __construct($name, $sexo)
    {
        $this->name = $name;
        $this->sexo = $sexo;
    }


}