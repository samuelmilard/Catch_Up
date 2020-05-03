<?php

require ('class_database.php');
require ('User.php');
$connexion = new database('db5000303646.hosting-data.io','dbs296633', 'dbu526590', '*w6kVB?2');
$bdd = $connexion->PDOConnexion();


$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
$name = !empty($_POST['name']) ? $_POST['name'] : NULL;

$user1 = new User($pass, $name);
$user1->connexion($bdd);

// inscription

require_once('inscription.php');

$name = !empty($_POST['name']) ? $_POST['name'] : NULL;
$pass = !empty($_POST['pass']) ? $_POST['pass'] : NULL;
$email = !empty($_POST['email']) ? $_POST['email'] : NULL;

$user1= new Inscription ($name, $pass, $email);
$user1-> inscription($bdd);

?>