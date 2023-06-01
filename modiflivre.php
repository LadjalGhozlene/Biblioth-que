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
			<div class="panel-heading">AJOUTER UN NOUVEAU LIVRE !</div>
			<div class="panel-body">
			 <fieldset>
			  <form action="ctrladdlivre.php" method="post" enctype="multipart/form-data">
			   <table class="login_table">
				<tr><td><input type="text" name="titre" id="nom" placeholder="Titre" value="<?php echo $titre_livre;?>" required></td></tr>
				<tr>
				 <td>
                   <select class="form-control select2" style="width: 100%;" name="cat">
					<option value="0" class="text-muted" disabled>-- CATEGORIES --</option>
                    <?php 
			         $categorie1=new fonction();
			         if($cat=$categorie1->affichercat())
				     {foreach ($cat as $menu_cat)
				     {
					   ?>
                    <option value="<?php echo $menu_cat['id_cat']; ?>" <?php if ($menu_cat['id_cat']==$id_cat) {echo "selected";} ?>><?php echo $menu_cat['intitule_cat']; ?></option>
					<?php }} ?>
                   </select>		
				 </td>
				</tr>
				<tr>
				 <td>
                   <select class="form-control select2" style="width: 100%;" name="edit">
					<option value="0" class="text-muted" disabled>-- EDITEUR --</option>
                    <?php 
			         $categorie1=new fonction();
			         if($cat=$categorie1->afficherediteur())
				     {foreach ($cat as $menu_cat)
				     {
					   ?>
                    <option value="<?php echo $menu_cat['id_editeur']; ?>" <?php if ($menu_cat['id_editeur']==$id_editeur) {echo "selected";} ?>><?php echo $menu_cat['intitule']; ?></option>
					<?php }} ?>
                   </select>		
				 </td>
				</tr>
				<tr>
				 <td>
                   <select class="form-control select2" style="width: 100%;" name="aut">
					<option value="0" class="text-muted" disabled>-- AUTEUR --</option>
                    <?php 
			         $categorie1=new fonction();
			         if($cat=$categorie1->afficherauteur())
				     {foreach ($cat as $menu_cat)
				     {
					   ?>
                    <option value="<?php echo $menu_cat['id_auteur']; ?>" <?php if ($menu_cat['id_auteur']==$id_auteur) {echo "selected";} ?>><?php echo $menu_cat['nom_auteur']." ".$menu_cat['prenom_auteur']; ?></option>
					<?php }} ?>
                   </select>		
				 </td>
				</tr>
				<tr><td><input type="file" id="exampleInputFile" name="fichier" required></td></tr>
				<tr><td><input type="text" name="desc" id="description" placeholder="Description*"  value="<?php echo $description;?>"required></td></tr>
				<tr><td><input type="text" name="isbn" id="isbn" placeholder="ISBN" value="<?php echo $img_livre;?>" required></td></tr>
				<tr><td><input type="submit" value="Ajouter"/></td></tr>
		       </table>
			  </form>
			 </fieldset>
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