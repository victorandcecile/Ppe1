<table class="mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp" style="width:45vw">
	<thead >
		<tr style="background-color: #4a89dc;border-bottom: 5px;border-left: 150px;">
			<th class="mdl-data-table__cell--non-numeric" style="left:20px;color: white;">Date</th>
			<th style="right:5px;color: white">Hebergement</th>
			<th style="right:25px;color: white ">Repas</th>
			<th style="right:30px;color: white ">Etape</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	<?php 
		 $i=0;
		 $heb=0;
		 $rep=0;
		 $etp=0;
		 $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
		 $query = $bdd -> prepare('SELECT * FROM forfait '); 
		 $query->execute();
		 while($ligne = $query->fetch(PDO::FETCH_ASSOC)){
		 	$date = date("d/m/20y", strtotime($ligne['date']));
		 	$date = str_replace('-','/', $date);
		 	$date_fin = date("d/m/20y", strtotime($ligne['date_fin']));
		 	$date_fin = str_replace('-','/', $date_fin);
		 	$heb+=$ligne['hebergement'];
		 	$rep+=$ligne['repas'];
		 	$etp+=$ligne['etape'];
	?>
		<?php
			if($i%2==0){
			echo '<tr style="background-color: #EEEEEE;">';
		}
		else{
			echo '<tr>';
		}
		$i++;
		?>
		<?php
			for ($cpt2=0; $cpt2<=4;$cpt2++){}
			?>
			<td class="mdl-data-table__cell" style="font-size:2.3vh;right:16px">
			<?php
				echo $date.'-'.$date_fin;
			?>
			</td>
			<td style="right:40px">
			<?php
				echo strval($ligne['hebergement']);
			?>
			</td>
			<td style="right:40px"><?php
				echo $ligne['repas'];
			?></td>
			<td style="right:40px"><?php
				echo $ligne['etape'];
			?></td>
			<td></td>
		</tr>
	<?php
	}
	?>
		<?php
			if($i%2==0){
			echo '<tr style="background-color: #EEEEEE;">';
		}
		else{
			echo '<tr>';
		}
		?>
			<td class="mdl-data-table__cell" style="left: -11.2vw;font-size: 3vh;color: black;font-weight: 700;">Total</td>
			<td style="font-size: 3vh;color: black;font-weight: 700;right:38px">
				<?php
				echo $heb;
				?>
			</td>
			<td style="font-size: 3vh;color: black;font-weight: 700;right:38px">
				<?php
				echo $rep;
				?>
			</td>
			<td style="font-size: 3vh;color: black;font-weight: 700;right:38px">
				<?php
				echo $etp;
				?>
			</td>
			<td></td>
		</tr>
	</tbody>
</table>
<style>

.mdl-data-table {
  margin:0 auto;
  text-align:center;
}


</style>