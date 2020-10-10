<?php

class User
{
    public $userName;
    protected $rol;

    public function __construct($userName, $rol)
    {
        $this->userName = $userName;
         $this->rol     = $rol;
    }

    public function getUserName()
    {
        return $this->userName;
    }
    /**
     * Si no queremos que nos sobrescriban el metodo
     * desde euna clase hija
     */
    /*final public function getUserName()
    {
        return $this->userName;
    }*/
    public function getRol(){
        return $this->rol;
    }

}

class Admin extends User
{

    //----Quiero crear un admin que tenga caracteristicas del usuario
    public function runProceso()
    {
        if ($this->rol == 'root') {
            return 'Ejecutando Proceso ...';
        } else {
            return 'Sin permisos ..';
        }
    }

}

$admin = new Admin('frodriguez','root');
echo $admin->getUserName();
echo "<br>Obteniendo el rol:".$admin->getRol();
echo " <br> ". $admin->runProceso();
echo "<br>";
$admin2 = new Admin('kaiser', 'normal');
echo $admin2->getUserName();
echo "<br>Obteniendo el rol:" . $admin2->getRol();
echo " <br> " . $admin2->runProceso();