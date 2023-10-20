<?php
// Préparez une requête select 
if (isset($_GET['id_circuit'],$_GET['nomCircuit'])) {
    $id_circuit = $_GET['id_circuit'];
	$libelle = $_GET['nomCircuit'];
}

$requete = "SELECT * FROM course WHERE id_circuit = '" . $id_circuit . "'";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="titre">Liste des courses du circuit </h1>
<h1 class='nomGP'><?php echo $libelle ?></h1>

	<table>
		<thead>
			<th>Nom GP</th>
			<th>Date</th>
			<th>Participants</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</thead>
		
			<?php foreach ($lignes as $ligne){ ?>
				<tr>
					<td><?php echo $ligne['libelleGP']; ?></td>
					<td><?php echo $ligne['dateCourse']; ?></td>
					<td><?php echo $ligne['participants']; ?></td>
					<td><img src="ressources/edit.png"></td>
					<td><a href="index.php?action=deleteCourse&id_course=<?= $ligne['id'] ?>&id_circuit=<?php echo $id_circuit ?>nomGP=<?php echo $libelle ?>"><img src="ressources/poubelle.png"></a></td>
				</tr>
			<?php } ?>
			<tr>
				<td class="td" colspan="5"><a href="index.php?action=vueAjoutCourse&id_circuit=<?php echo $id_circuit ?>">Ajout Course</a></td>
			</tr>


	</table>

