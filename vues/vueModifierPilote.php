<?php
include 'dao/NationnaliteDAO/selectNationnalite.php';

$id = isset($_GET['id_pilote']) ? $_GET['id_pilote'] : null;

if ($id) {
    $requete = "SELECT * FROM pilote WHERE id = " . $id;
    $sth = $connexion->prepare($requete);
    $sth->execute();
    $select_pilote = $sth->fetch(PDO::FETCH_ASSOC);
}

?>

<form action="index.php?action=updatePilote" method="POST">
    <h2>Modifier le Pilote :</h2><br>
    <h2><?php echo $select_pilote['nom'], ' ', $select_pilote['prenom']; ?></h2>

    <div class="affichage">
        <label>Nom</label>
        <input value="<?php echo $select_pilote['nom']; ?>" name="nom" type="text" required>
    </div>

    <div class="affichage">
        <label>Prénom</label>
        <input value="<?php echo $select_pilote['prenom']; ?>" name="prenom" type="text" required>
    </div>

    <div class="affichage">
        <label>Nationalité</label>
        <select name="nationalite">
            <?php foreach ($nationalites as $nationalite) { ?>
                <option value="<?php echo $nationalite['libelle']; ?>" <?php echo $nationalite['libelle'] === $select_pilote['nationalite'] ? 'selected' : ''; ?>>
                    <?php echo $nationalite['libelle']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="affichage">
        <label>Date de naissance</label>
        <input value="<?php echo $select_pilote['dateNaiss']; ?>" name="date_naissance" type="date" required>
    </div>

    <input value="<?php echo $select_pilote['idTeam']; ?>" name="idTeam" type="hidden">
    <input value="<?php echo $select_pilote['id']; ?>" name="id_pilote" type="hidden">

    <div>
        <button type="submit">Modifier</button>
    </div>
</form>