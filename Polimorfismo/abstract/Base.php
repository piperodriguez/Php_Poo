<?php

abstract class Base
{
    protected $name;
    protected $sexo;

    private function getClassName()
    {
        return get_called_class();
    }

    public function login(){

        switch ($this->sexo) {
            case 'Femenino':
                $msg = "Hola Bienvenida $this->name";
                break;            
            case 'Masculino':
                $msg = "Hola Bienvenido $this->name";
                break;
            default:
                $msg = "Hola Bienvenido $this->name";
                break;    
        }

        if ($this->name == 'Daniela') {
            $msg .= "\n $this->name Quieres ser mi novia ?\n";
        } else {
            $msg .= "\ndesde la clase {$this->getClassName()}\n";
        }
        return $msg;
    }    
}
