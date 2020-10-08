<?php
/**
 * para mantener la integridad de los datos
 * se pueden crear propiedades metodos y constante
 * los elementos publicos pueden ser accedidos desde cualquier parte del sistema
 * los elemento protected solo pueden acceder a mis elementos aquellas clases que hereden de mi
 * private nadie ni los que heredan
 */
class User
{
    //public
    //protected
    //private

    public const PAGINACION = 15;

    public $username;
    //private $username;
    //protected $username;

    public function getUsername()
    {

    }

}
