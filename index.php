<?php
include "dao/db.php";
include "controller/header.php";

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
    include "controller/pilotes.php";
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

if($action == "vueModifPilote"){
    include "vues/vueModifierPilote.php";
}

if($action == "updatePilote"){
    include "dao/PiloteDAO/updatePilote.php";
}

// CRUD NATIONNALITE

if ($action == "nationalite") {
    include "dao/NationnaliteDAO/selectNationnalite.php";
}

// CRUD TEAM

if($action == "team"){
    include "controller/team.php";
}

if($action == "vueAjoutTeam"){
    include "vues/vueAjoutTeam.php";
}
if($action == "ajoutTeam"){
    include "dao/TeamDAO/ajoutTeam.php";
}

if($action == "vueModifierTeam"){
    include "vues/vueModifierTeam.php";
}

if($action == "updateTeam"){
    include "dao/TeamDAO/updateTeam.php";
}

if($action == "deleteTeam"){
    include "dao/TeamDAO/deleteTeam.php";
}

// CRUD CIRCUIT
if($action == "circuit"){
    include "controller/circuit.php";
}

if($action == "vueAjoutCircuit"){
    include "vues/vueAjoutCircuit.php";
}

if($action == "ajoutCircuit"){
    include "dao/CircuitDAO/ajoutCircuit.php";
}

if($action == "vueModifierCircuit"){
    include "vues/vueModifierCircuit.php";
}

if($action == "updateCircuit"){
    include "dao/CircuitDAO/updateCircuit.php";
}

if($action == "deleteCircuit"){
    include "dao/CircuitDAO/deleteCircuit.php";
}

// CRUD COURSE

if($action == "course"){
    include "controller/course.php";
}

if($action == "deleteCourse"){
    include "dao/CourseDAO/deleteCourse.php";
}

if($action == "vueModifierCourse"){
    include "vues/vueModifierCourse.php";
}

if($action == "updateCourse"){
    include "dao/CourseDAO/updateCourse.php";
}

if($action == "vueAjoutCourse"){
    include "vues/vueAjoutCourse.php";
}
if($action == "ajoutCourse"){
    include "dao/CourseDAO/ajoutCourse.php";
}



?>