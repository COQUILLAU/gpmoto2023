<?php
include "dao/db.php";
include "vues/header.php";

?>

<?php
// pour le changement de "page" on utilise la variable "action" qui est en $_GET pour récupérer les instructions.
$action = '';

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

if($action == "index"){
    include "index.php";
}

// CRUD PILOTES
if($action == "pilotes"){
    include "vues/pilotes.php";
}

if($action == "vueAjoutPilote"){
    include "vues/vueAjoutPilote.php";
}
if($action == "ajoutPilote"){
    include "dao/PiloteDAO/ajoutPilote.php";
}

if($action == "deletePilote"){
    include "dao/PiloteDAO/deletePilote.php";
}

// CRUD TEAM

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

// CRUD CIRCUIT
if($action == "circuit"){
    include "vues/circuit.php";
}

if($action == "vueAjoutCircuit"){
    include "vues/vueAjoutCircuit.php";
}

if($action == "ajoutCircuit"){
    include "dao/CircuitDAO/ajoutCircuit.php";
}
if($action == "deleteCircuit"){
    include "dao/CircuitDAO/deleteCircuit.php";
}

// CRUD COURSE

if($action == "course"){
    include "vues/course.php";
}

if($action == "deleteCourse"){
    include "dao/CourseDAO/deleteCourse.php";
}

if($action == "vueAjoutCourse"){
    include "vues/vueAjoutCourse.php";
}
if($action == "ajoutCourse"){
    include "dao/CourseDAO/ajoutCourse.php";
}



?>