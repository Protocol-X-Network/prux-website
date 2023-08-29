<?php
//setting data bd 
$server = "localhost";
$bd = "prux";
$pass = "";
$user = "root";
/////////////////////////////////////
//setting connection db

// setting site
$namesite = "Amador2Share";
$descsite = "Rede social dedicado ao futebol amador.";

$con = new mysqli($server, $user, $pass, $bd);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//////////////////////////////////////////////////