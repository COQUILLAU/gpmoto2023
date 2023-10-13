<?php
if (isset($_GET['id_circuit'])) {
    $id_circuit = $_GET['id_circuit'];
}

// Récupérer les données du formulaire
$nomGP = isset($_POST['nom_GP']) ? $_POST['nom_GP'] : '';
$date_course = isset($_POST['date_course']) ? $_POST['date_course'] : '';

// Préparez la requête d'insertion
$requeteInsert = "INSERT INTO course (libelleGP, dateCourse, participants, id_circuit) 
                 VALUES (:nomGP, :date_course, 0, :id_circuit)";
$requeteSQL = $connexion->prepare($requeteInsert); 
$requeteSQL->execute(array(
    'nomGP' => $nomGP,
    'date_course' => $date_course,
    'id_circuit' => $id_circuit
));
header('Location: index.php?action=course');
?>