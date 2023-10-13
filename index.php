<?php
include "dao/db.php";
include "vues/header.php";

// pour le changement de "page" on utilise la variable "action" qui est en $_GET pour récupérer les instructions.
$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if($action == "index"){
    include "index.php";
}

if($action == "pilotes"){
    include "vues/pilotes.php";
}

if($action == "piloteCrud"){
    include "controller/PiloteController.php";
}

if($action == "ajoutPilote"){
    include "controller/ajoutPilote.php";
}

if($action == "Equipes"){
    include "vues/resultat.php";
}

?>