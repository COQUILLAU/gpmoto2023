
<?php
// Préparez une requête select 

$requete = "SELECT * FROM pilote;";
$sth = $connexion->prepare($requete);
$sth->execute();
$lignes = $sth->fetchAll(PDO::FETCH_ASSOC);
?>

<h1 class="titre">Liste des pilotes</h1>

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
					<td>
						<?php if ($ligne['idTeam'] == 0) {
							  	echo "Pas de team";
							  } else{ 
								echo $ligne['idTeam'];
							   } ?>
					</td>					
					<td><a href="index.php?action=vueModifPilote&id_pilote=<?= $ligne['id']?>"><img src="ressources/edit.png"></td>
					<td><a href="index.php?action=deletePilote&id_pilote=<?= $ligne['id'] ?>"><img src="ressources/poubelle.png"></a></td>
				</tr>
			<?php } ?>
			<tr>
				<td class="td" colspan="7"><a href="index.php?action=vueAjoutPilote">Ajout pilote</a></td>
			</tr>


	</table>
	<div class="tableau_pilote">
		<div class="all_background_pilote">

			<div class="background_pilote">
				<div class="left">
					<img class="pilote" src="./ressources/gpmoto.webp">
					<img class="pays" src="./ressources/gpmoto.webp">
				</div>

				<div class="right">

					<div class="top">
						<h2>NOM PRENOM</h2>
						<p>Date de Naissance</p>
					</div>

					<div class="bottom">
						<h2>TEAM</h2>
						<p>Coéquipier : </p>
					</div>
			
				</div>
			</div>

			<div class="background_pilote">
				<div class="left">
					<img class="pilote" src="./ressources/gpmoto.webp">
					<img class="pays" src="./ressources/gpmoto.webp">
				</div>

				<div class="right">

					<div class="top">
						<h2>NOM PRENOM</h2>
						<p>Date de Naissance</p>
					</div>

					<div class="bottom">
						<h2>TEAM</h2>
						<p>Coéquipier : </p>
					</div>
			
				</div>
			</div>

			<div class="background_pilote">
				<div class="left">
					<img class="pilote" src="./ressources/gpmoto.webp">
					<img class="pays" src="./ressources/gpmoto.webp">
				</div>

				<div class="right">

					<div class="top">
						<h2>NOM PRENOM</h2>
						<p>Date de Naissance</p>
					</div>

					<div class="bottom">
						<h2>TEAM</h2>
						<p>Coéquipier : </p>
					</div>
			
				</div>
			</div>
		</div>
	</div>
