<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gpmotog3";

try {
 $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
 echo "Erreur de connexion : " . $e->getMessage();
}
?>
