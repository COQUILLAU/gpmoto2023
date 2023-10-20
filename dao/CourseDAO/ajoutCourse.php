<?php

if (isset($_GET['id_circuit'])) {
    $id_circuit = $_GET['id_circuit'];
}

$requete = "SELECT * FROM circuit WHERE id = :id_circuit";
$sth = $connexion->prepare($requete);
$sth->bindParam(':id_circuit', $id_circuit, PDO::PARAM_INT);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);

// Vérifiez s'il y a des résultats
if (count($lignes) > 0) {
    $nomCircuit = $lignes[0]['nom'];
} else {
    // Gérez ici le cas où aucun résultat n'a été trouvé.
    $nomCircuit = "Circuit non trouvé";
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
header('Location: index.php?action=course&id_circuit=' . $id_circuit . '&nomCircuit=' . $nomCircuit);
?>