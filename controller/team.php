<?php
// Préparez une requête select 

$requete = "SELECT * FROM team;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes_select_team = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>Liste des Equipes</h1>

	<table>
		<thead>
			<th>Libelle</th>
			<th>Pays</th>
			<th>Model de Moto</th>
			<th>Pilote 1</th>
			<th>Pilote 2</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		
		<?php foreach ($lignes_select_team as $ligne) { ?>
    		<tr>
        		<td><?php echo $ligne['libelle']; ?></td>
        		<td><?php echo $ligne['pays']; ?></td>
        		<td><?php echo $ligne['modeleMoto']; ?></td>
        		<td><?php echo $ligne['idPilote1']; ?></td>
        		<td><?php echo $ligne['idPilote2']; ?></td>
				
				<td><img src="ressources/edit.png"></td>
				<td><a href="index.php?action=deleteTeam&id_team=<?= $ligne['id'] ?>"><img src="ressources/poubelle.png"></a></td>
			<tr>
				<?php } ?>
				<td class="td" colspan="7"><a href="index.php?action=vueAjoutTeam">Ajout TEAM</a></td>
			</tr>
			
	</table>