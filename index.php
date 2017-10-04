<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Page_de_connexion</title>

      <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
<div style="height: 2em;"></div>
<form id="Ecran" method="post" action="index.php" class="form" autocomplete="off">
<div id="head">
	<h2 style="padding-left: 5em;padding-top: 1em">GSB</h2>
      <h4 style="padding-bottom: 2em;">Login</h4>
     </div>
<input type="text" style="opacity: 0;position: absolute;left:600px">
<input type="Password" style="opacity: 0;position: absolute;left:600px">
  <div class="champ" id="champ1">
    <input type="text" id="log" autocomplete="off" required name="salut" /><hr>
    <label id="log1">Username</label>
  </div>
  <div class="champ"> 
    <input type="Password" autocomplete="off" required  id="log_" name="cava"/><hr>
    <label id="log1_">Password</label>
  </div>
  <button type="submit" class="Bouton" id="bout" name="submit">Connexion</button>
  </div>
<script  src="js/index.js"></script>
<?php
  session_start();
  $bdd = new PDO('mysql:host=localhost;dbname=ppe;charset=utf8', 'root', '');
  if(isset($_POST['submit']))
  {
        $query = $bdd -> prepare('SELECT login, mdp FROM visiteur WHERE login = :login '); 
        $query->bindValue(':login',$_POST['salut'], PDO::PARAM_STR); //redefinir une variable
        $query->execute();
        $data=$query->fetch();
        if($data['mdp'] == $_POST['cava'])
        {
          header('Location: commercial.php');
        }
        else
        {
          echo'erreur';
        }
  }

?>
</body>
</html>
