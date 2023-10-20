<?php
include 'dao/NationnaliteDAO/selectNationnalite.php';

$idTeam = isset($_GET['id_team']) ? $_GET['id_team'] : null;

$select_team = []; 
$select_pilote = []; 

if ($idTeam) { // Utilisez $idTeam pour vérifier
    $requete = "SELECT * FROM team WHERE id = :idTeam"; 
    $sth = $connexion->prepare($requete);
    $sth->bindParam(':idTeam', $idTeam, PDO::PARAM_INT);
    $sth->execute();
    $select_team = $sth->fetch(PDO::FETCH_ASSOC);
}

$requete1 = "SELECT * FROM pilote";
$sth1 = $connexion->prepare($requete1);
$sth1->execute();
$select_pilote = $sth1->fetchAll(PDO::FETCH_ASSOC);

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
        <select name="pilote2">
            <?php
            foreach ($select_pilote as $pilote) {
                echo "<option value='{$pilote['id']}'>{$pilote['nom']}</option>";
            }
            ?>
        </select>
    </div>

    <div class="affichage">
        <label>Pilote 2</label>
        <select name="pilote2">
            <?php
            foreach ($select_pilote as $pilote) {
                echo "<option value='{$pilote['id']}'>{$pilote['nom']}</option>";
            }
            ?>
        </select>
    </div>

    <input value="<?php echo $select_team['id']; ?>" name="id_team" type="hidden">

    <div>
        <button type="submit">Modifier</button>
    </div>
</form>
