<html>
<head>
  <meta charset="UTF-8">
  <title>Page_Commercial</title>
  <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
  		<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.amber-pink.min.css" />
		<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="css/commercial.css"> 
</head>
<body>
<div class="mdl-layout mdl-js-layout" >
  <div class="mdl-layout__drawer" >
    <span class="mdl-layout-title" style="margin-left:10px"">Victor Morel</span>
    <div style="border-radius: 50%;margin-left:35px"><img src="img/icone.png" width="150px" height="150px" style="border-radius: 50%;"></div>
    <nav class="mdl-navigation">
      <div class="mdl-navigation__link" id="nav1">Fiche En cours</div>
      <div class="mdl-navigation__link" id="nav2">Ajouter des Frais</div>
      <div class="mdl-navigation__link" id="nav3">Historique</div>
      <div class="mdl-navigation__link" id="nav4">Deconnexion</div>
    </nav>
  </div>
  </div>
</div>
<div id="info"><div id="titre">Fiche En Cours</div><div id="titre2">Menu</div></div>
<div id="affichage">
	<div id="Frais_f">Frais forfaitisé</div>
	<div id="aff_Frais_f">
			<br>
			<br>
			<?php
				include 'include_commercial/Frais_f.php';
			?>
	</div>
</div>
<div id="affichage_">
	<div id="Hors_f">Hors-Forfait</div>
	<div id="aff_Hors_f">
			<br>
			<br>
			<?php
				include 'include_commercial/Hors_f.php';
			?>
			</div>
</div>
</body>
<script src="js/commercial.js"></script>
</html>
