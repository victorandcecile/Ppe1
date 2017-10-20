<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp" style="width:45vw">
	<thead>
		<tr style="background-color: #4a89dc;">
			<th class="mdl-data-table__cell--non-numeric" style="left:16px;color: white;">Date</th>
			<th style="right:5px;color: white">Description</th>
			<th style="right:25px;color: white ">Justificatif</th>
			<th style="right:30px;color: white ">Montant</th>
			<th style="right:35px;color: white ">Etat</th>
		</tr>
	</thead>
	<tbody>
	<?php 
		 $i=0;
		 $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
		 $query = $bdd -> prepare('SELECT * FROM hors_forfait '); 
		 $query->execute();
		 while($ligne = $query->fetch(PDO::FETCH_ASSOC)){
		 	$date = date("d/m/20y", strtotime($ligne['date']));
		 	$date = str_replace('-','/', $date);
		 	$date_fin = date("d/m/20y", strtotime($ligne['date_fin']));
		 	$date_fin = str_replace('-','/', $date_fin);
	?>
		<?php
			if($i%2==0){
			echo '<tr style="background-color: #EEEEEE">';
		}
		else{
			echo '<tr>';
		}
		$i++;
		?>
		<?php
			for ($cpt2=0; $cpt2<=4;$cpt2++){}
			?>
			<td class="mdl-data-table__cell" style="font-size:2.3vh;left:5px">
			<?php
				echo $date.'-'.$date_fin;
			?>
			</td>
			<td style="right:30px;">
			<?php
				echo $ligne['description'];
			?>
			</td>
			<td><?php
				
			?></td>
			<td style="right:45px"><?php
				echo $ligne['montant'];
			?></td>
			<td style="left:-15px"><?php
				if($ligne['statut']==0){
					echo 'En cours';
				}
				if($ligne['statut']==1){
					echo 'Valide';
				}
				if($ligne['statut']==2){
					echo 'Refuse';
				}
			?></td>
		</tr>
	<?php
	}
	?>
	</tbody>
</table>
</div>