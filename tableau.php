<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=library','root','');

if(!isset($_SESSION['admin']))
{
	include('loginadmin.php');exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../CSS/theme.css"/>
  <title>Biblio_Admin_Web</title>
<body>
<div class="jumbotron">
      <div class="col-lg-8">
          <a href="../index.php"><span class="biblio-logo">Digital<span class="dot">.Library</span></span></a>
      </div>
      <div class="col-lg-4">
          <div id="logoright" class="biblio-logo"></div>
      </div>
</div>

<div class="row">
 <div class="col-lg-12">
  <div class="panel panel-success panel1" >
   <div class="panel-heading"><h3>Tableau de Board - Administration</h3></div>
    <div class="panel-body">
	 <div class="col-lg-2">
		 
	 </div>	
	 <div class="col-lg-2">
		 <div class="panel-body bg-danger" align="center">
			 <h4>Gestion des Lecteurs</h4>
			 <div align="left">
			 Supprimer<br>
			 Modifier<br>
			 Gerer<br>
			 </div><hr>
			<a href="tableau.php"><button class="btn btn-success" type="button">Entrer</button></a>
		 </div>
	 </div>	
	 <div class="col-lg-2">
		 <div class="panel-body bg-warning" align="center">
			 <h4>Gestion des Livres</h4>
			 <div align="left">
			 Ajouter<br>
			 Supprimer<br>
			 Modifier<br>
			 </div><hr>
			<a href="tableau.php"><button class="btn btn-success" type="button">Entrer</button></a>
		 </div>
	 </div>	
	 <div class="col-lg-2">
		 <div class="panel-body bg-primary" align="center">
			 <h4>Gestion des Auteurs</h4>
			 <div align="left">
			 Ajouter<br>
			 Supprimer<br>
			 Modifier<br>
			 </div><hr>
			<a href="tableau.php"><button class="btn btn-success" type="button">Entrer</button></a>
		 </div>
	 </div>	
	 <div class="col-lg-2">
		 <div class="panel-body bg-info" align="center">
			 <h4>Gestion des Editeurs</h4>
			 <div align="left">
			 Ajouter<br>
			 Supprimer<br>
			 Modifier<br>
			 </div><hr>
			<a href="tableau.php"><button class="btn btn-success" type="button">Entrer</button></a>
		 </div>
	 </div>	
	</div>
  </div>
 </div>
</div>
<?php
include('footer.php');
?>
<script type="text/javascript" src="../CSS/bootstrap/js/bootstrap.min.js">
</script>
</body>
</html>