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

if($action == "vueAjoutPilote"){
    include "vues/vueAjoutPilote.php";
}
if($action == "ajoutPilote"){
    include "dao/PiloteDAO/ajoutPilote.php";
}

if($action == "team"){
    include "vues/team.php";
}

if($action == "vueAjoutTeam"){
    include "vues/vueAjoutTeam.php";
}
if($action == "ajoutTeam"){
    include "dao/TeamDAO/ajoutTeam.php";
}

if($action == "deleteTeam"){
    include "dao/TeamDAO/deleteTeam.php";
}



?>