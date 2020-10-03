<?php

include 'clases/User.php';
include 'clases/Admin.php';

$user = new User;
$user->tipo = new Admin;


?>
<html lang="es">
    <head>

    </head>
    <body>
        <header>
            <h1>Programación Orientada a Objetos</h1>
        </header>
        <table>
            <thead>
                <tr>
                    <th>Saludo</th>
                </tr>
            </thead>
        </table>
        <tbody>
            <tr>
                <td>
                <?php echo $user->tipo->saludar(); ?>
                </td>
            </tr>
        </tbody>
    </body>
</html>