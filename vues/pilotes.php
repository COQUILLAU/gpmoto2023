
<?php
// Préparez une requête select 

$requete = "SELECT DISTINCT * FROM pilotes;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<h1>Liste des pilotes</h1>

	<table>
		<thead>
			<th>Prenom</th>
			<th>Nom</th>
			<th>Nationnalite</th>
			<th>Date de Naissance</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		
			<?php foreach ($lignes as $ligne){ ?>
				<tr>
					<td><?php echo $ligne['prenom']; ?></td>
					<td><?php echo $ligne['nom']; ?></td>
					<td><?php echo $ligne['nationalite']; ?></td>
					<td><?php echo $ligne['date_naissance']; ?></td>
					<td><!-- Mettez ici le lien ou le bouton pour modifier --></td>
					<td><!-- Mettez ici le lien ou le bouton pour supprimer --></td>
				</tr>
			<?php } ?>
			<tr><td class="td" colspan="6"><a href="index.php?action=ajoutPilote">Ajout pilote</a></td></tr>


	</table>

