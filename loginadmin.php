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
          <a href="../index.php"><span class="biblio-logo">Digital<span class="dot">.Library</span></span></a>
      </div>
      <div class="col-lg-4">
          <div id="logoright" class="biblio-logo"></div>
      </div>
</div>

<div class="row">
  <div class="col-lg-12">
<div class="panel panel-success panel1" >
 <div class="panel-heading"><h3>Administration</h3></div>
  <div class="panel-body">
   <fieldset>
    <form action="ctrl.php" method="post">
	 <table class="login_table">
	 <tr><td><input type="text" name="user" id="user" placeholder="User &nbsp;*" required></td></tr>
	 <tr><td><input type="password" name="psw" id="password" placeholder="Mot de passe &nbsp;*" required></td></tr>
	 <tr><td><small>Se Souvenir de moi &nbsp;</small><input type="checkbox" name="keep" value="true"></td></tr>
	 <tr><td><input type="submit" value="Connexion"/></td></tr>
		</tr>
	 </table>
	</form>
   </fieldset>
<hr>
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