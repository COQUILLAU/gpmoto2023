<?php
// Préparez une requête select 

$requete = "SELECT * FROM circuit;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="titre">Liste des Circuits</h1>

	<table>
		<thead>
			<th>Nom du Circuit</th>
			<th>Pays</th>
			<th>Année</th>
			<th>Longueur</th>
			<th>Lister les courses</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		
			<?php foreach ($lignes as $ligne){ ?>
				<tr>
					<td><?php echo $ligne['nom']; ?></td>
					<td><?php echo $ligne['pays']; ?></td>
					<td><?php echo $ligne['annee']; ?></td>
					<td><?php echo $ligne['longueur']; ?></td>
                    <td><a href="index.php?action=course&id_circuit=<?= $ligne['id'] ?>&nomCircuit=<?= $ligne['nom'] ?>">Afficher les courses</a></td>
					<td><a href="index.php?action=vueModifierCircuit&id_circuit=<?= $ligne['id'] ?>&nomGP=<?= $ligne['nom'] ?>"><img src="ressources/edit.png"></td>
					<td><a href="index.php?action=deleteCircuit&id_circuit=<?= $ligne['id'] ?>"><img src="ressources/poubelle.png"></a></td>
				</tr>
			<?php } ?>
			<tr>
				<td class="td" colspan="6"><a href="index.php?action=vueAjoutCircuit">Ajout Circuit</a></td>
			</tr>


	</table>

