<?php
require_once 'Admin.php';
require_once 'User.php';
require_once 'Guest.php';


$guest = new Guest();
echo $guest->login();
echo "</br>";
$user = new User('Daniela','Femenino');
echo $user->login();
echo "</br>";
$user2 = new User('Brayitan','Masculino');
echo $user2->login();
echo "</br>";
$admin = new Admin('frodriguez', '');
echo $admin->login();
