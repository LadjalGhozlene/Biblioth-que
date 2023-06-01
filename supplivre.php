<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=library','root','');
include("modele/fonctionadmin.php");
if(!isset($_SESSION['admin']))
{
	include('loginadmin.php');exit();
}
if (isset($_GET['isbn']))
{
	$isbn = $_GET['isbn'];
	$lelivre=new fonction();
	if($livre=$lelivre->afflivre($isbn))
	{
		foreach ($livre as $livremodif)
		{
			$titre_livre = $livremodif['titre_livre'];
			$id_cat = $livremodif['id_cat'];
			$id_editeur = $livremodif['id_editeur'];
			$description = $livremodif['description'];
			$id_auteur = $livremodif['id_auteur'];
			$img_livre = $livremodif['img_livre'];
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" href="../CSS/theme.css"/>
  <title>Biblio_Admin_Web</title>
<body>
<div class="jumbotron">
      <div class="col-lg-8">
          <img src="../IMG/logo.svg" height="90" alt=""/>
      </div>
</div>

<form method="POST" action="#">
 <div class="row">
	 <div class="col-lg-1" align="center">
	 </div>
   <div class="col-lg-3" align="center">
  </div>
   <div class="col-lg-6" align="right">
	   <div class="input-group">
       <a href="index.php"><button class="btn btn-warning" type="button">TABLEAU DE BOARD</button></a>
	   </div>	   
  </div>
 </div>
</form><hr>
	<div class="row">
	<div class="col-lg-2">
	
	</div>
	<div class="col-lg-8">
		<div class="panel panel-info">
		  <div class="panel-heading" align="center"><h3>SUPPRIMER LIVRE !</h3></div>
			<div class="panel-body">
			 <div>
				 <?php
		 			echo "<h4><strong>Titre : </strong>",$titre_livre,"</h4>";
			        echo "<h4><strong>Description : </strong></h4><div align='justify'>",$description,"</div><hr>";
				 ?>
		      <img src="../<?php echo $img_livre;?>" width="120" height="179" alt=""/>
			 </div><hr>
			 <form method="get" action="supplivre2.php" enctype="multipart/form-data">
				 <div align="center">
				  <input type="hidden" name="isbn" value="<?php echo $isbn; ?>">
				  <button class="btn btn-danger" type="submit">Supprimer</button>
				  <a href="ges-livre.php" class="btn btn-success" type="reset">Annuler</a>
				 </div>
			 </form>	
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