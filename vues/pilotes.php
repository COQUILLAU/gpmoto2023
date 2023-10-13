
<?php
// Préparez une requête select 

$requete = "SELECT * FROM pilote;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Liste des pilotes</h1>

	<table>
		<thead>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Nationnalite</th>
			<th>Date de Naissance</th>
			<th>Id team</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		
			<?php foreach ($lignes as $ligne){ ?>
				<tr>
					<td><?php echo $ligne['nom']; ?></td>
					<td><?php echo $ligne['prenom']; ?></td>
					<td><?php echo $ligne['nationalite']; ?></td>
					<td><?php echo $ligne['dateNaiss']; ?></td>
					<td><?php echo $ligne['idTeam']; ?></td>
					<td><img src="ressources/edit.png"></td>
					<td><a href="index.php?action=deletePilote&id_pilote=<?= $ligne['id'] ?>"><img src="ressources/poubelle.png"></a></td>
				</tr>
			<?php } ?>
			<tr>
				<td class="td" colspan="6"><a href="index.php?action=vueAjoutPilote">Ajout pilote</a></td>
			</tr>


	</table>

