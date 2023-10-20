<?php
include 'dao/NationnaliteDAO/selectNationnalite.php';

$idTeam = isset($_GET['id_team']) ? $_GET['id_team'] : null;
$oldPilote1 = isset($_GET['id_pilote1']) ? $_GET['id_pilote1'] : null;
$oldPilote2 = isset($_GET['id_pilote2']) ? $_GET['id_pilote2'] : null;

$select_team = []; 
$select_pilote = [];

if ($idTeam) {
    $requete = "SELECT * FROM team WHERE id = :idTeam"; 
    $sth = $connexion->prepare($requete);
    $sth->bindParam(':idTeam', $idTeam, PDO::PARAM_INT);
    $sth->execute();
    $select_team = $sth->fetch(PDO::FETCH_ASSOC);
}

$requete1 = "SELECT * FROM pilote WHERE id = " . $oldPilote1;
$sth1 = $connexion->prepare($requete1);
$sth1->execute();
$select_oldPilote1 = $sth1->fetch(PDO::FETCH_ASSOC);

$requete2 = "SELECT * FROM pilote WHERE id = " . $oldPilote2;
$sth2 = $connexion->prepare($requete2);
$sth2->execute();
$select_oldPilote2 = $sth2->fetch(PDO::FETCH_ASSOC);

$requete3 = "SELECT * FROM pilote";
$sth3 = $connexion->prepare($requete3);
$sth3->execute();
$select_pilote = $sth3->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="index.php?action=updateTeam" method="POST">
    <h2>Modifier la Team :</h2><br>
    <h2><?php echo $select_team['libelle']; ?></h2>

    <div class="affichage">
        <label>Nom Team</label>
        <input value="<?php echo $select_team['libelle']; ?>" name="nom" type="text" required>
    </div>

    <div class="affichage">
        <label>Nationalité</label>
        <select name="pays">
            <?php foreach ($nationalites as $nationalite) { ?>
                <option value="<?php echo $nationalite['pays']; ?>" <?php echo $nationalite['pays'] === $select_team['pays'] ? 'selected' : ''; ?>>
                    <?php echo $nationalite['pays']; ?>
                </option>
            <?php } ?>
        </select>
    </div>

    <div class="affichage">
        <label>Modèle de Moto</label>
        <input value="<?php echo $select_team['modeleMoto']; ?>" name="modeleMoto" type="text" required>
    </div>

    <div class="affichage">
        <label>Pilote 1</label>
        <select name="idPilote1">
            <?php
            foreach ($select_pilote as $pilote) {
                $selected = ($pilote['id'] == $oldPilote1) ? 'selected' : '';
                echo "<option value='{$pilote['id']}' $selected>{$pilote['nom']}</option>";
            }
            if ($oldPilote1 == 0) {
                echo "<option value='0' selected>Selectionner un pilote</option>";
            }
            ?>
        </select>
    </div>

    <div class="affichage">
        <label>Pilote 2</label>
        <select name="idPilote2">
            <?php
            foreach ($select_pilote as $pilote) {
                $selected = ($pilote['id'] == $oldPilote2) ? 'selected' : '';
                echo "<option value='{$pilote['id']}' $selected>{$pilote['nom']}</option>";
            }
            if ($oldPilote2 == 0) {
                echo "<option value='0' selected>Selectionner un pilote</option>";
            }
            ?>
        </select>
    </div>

    <input value="<?php echo $select_team['id']; ?>" name="id_team" type="hidden">

    <div>
        <button type="submit">Modifier</button>
    </div>