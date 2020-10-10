<?php


interface Persona
{
    public function getNombre();
}


class Admin implements Persona
{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
}


$admin =  new Admin("Juan Felipe");
echo $admin->getNombre();