<?php

interface Search
{
    public function all();
}


class User  implements Search
{
    public function all(){
        return "Obteniendo Todos los usuarios, Array(default)";
    }
}


class Comentarios  implements Search
{
    public function all(){
        return "Obteniendo Todos los Comentarios, Array(default)";
    }
}

class Pagos  implements Search
{
    public function all(){
        return "Obteniendo respuesta de pagos en formato Json";
    }
}

class ConfiguracionesLdap  implements Search
{
    public function __construct($tree)
    {
        $this->tree = $tree;
    }    
    public function all(){
        
        return "Obteniendo respuesta de las configuraciones del ldap  $this->tree";
    }
}

$user = new User();
echo $user->all();
echo "</br>";
$dataComentarios = new Comentarios();
echo $dataComentarios->all();
echo "</br>";
$dataPagos = new Pagos();
echo $dataPagos->all();
echo "</br>";


?>

<html lang="es">
<head>
   <?php 
    $tree = 'dc=informatica,dc=com';
    $dataLdap = new ConfiguracionesLdap($tree); 
   ?>
</head>
<body>
    <h1>Configuraciones Ldap</h1>
    </br>
    <ul>
        <li>
            <?php  echo $dataLdap->all(); ?>
        </li>
    </ul>
</body>
</html>