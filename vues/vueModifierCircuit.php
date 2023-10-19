<?php

$id = isset($_GET['id_circuit']) ? $_GET['id_circuit'] : null;

if ($id) {
    $requete = "SELECT * FROM circuit WHERE id = " . $id;
    $sth = $connexion->prepare($requete);
    $sth->execute();
    $select_circuit = $sth->fetch(PDO::FETCH_ASSOC);
}

?>

<form action="index.php?action=updateCircuit" method="POST">
    <h2>Modifier le Circuit :</h2><br>
    <h2><?php echo $select_circuit['nom']; ?></h2>

    <div class="affichage">
        <label>Nom</label>
        <input value="<?php echo $select_circuit['nom']; ?>" name="nom" type="text" required>
    </div>

    <div class="affichage">
        <label>Pays</label>
        <input value="<?php echo $select_circuit['pays']; ?>" name="pays" type="text" required>
    </div>

    <div class="affichage">
        <label>Année</label>
        <input value="<?php echo $select_circuit['annee']; ?>" name="annee" type="number" required>
    </div>

    <div class="affichage">
        <label>Longueur</label>
        <input value="<?php echo $select_circuit['longueur']; ?>" name="longueur" type="number" required>
    </div>

    <input value="<?php echo $select_circuit['id']; ?>" name="id_circuit" type="hidden">

    <div>
        <button type="submit">Modifier</button>
    </div>
</form>