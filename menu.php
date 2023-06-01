<?php
include("modele/fonctionmenu.php");

?>
<div class="col-lg-3">
    <form method="get" action="index.php" > 
      <div class="input-group">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit"  placeholder="chercher">Rechercher</button>
      </span>
      <input name="chercher" type="text" class="form-control" />
      
    </div>
    </from>

    <div class="col-lg-12">
          <div id="menu1">
           <h3>Themes</h3>
            <ul>
			  <?php 
			    $categorie1=new fonction();
			    if($cat=$categorie1->affichercat())
				 {
				  foreach ($cat as $menu_cat)
				  {
					  ?>
                <li>
				  <a href="index.php?id_cat=<?php echo $menu_cat['id_cat'];?>">
					  <?php echo $menu_cat['intitule_cat'];?>
				  </a>
				</li>
				<?php }}?>
            </ul>
          </div>
          <div id="menu2">
           <h3>Auteurs</h3>
            <ul>
			  <?php 
			    $categorie1=new fonction();
			  if($aut=$categorie1->afficherauteur())
				 {
				  foreach ($aut as $menu_aut)
				  {
					  ?>
              <li>
				  <a href="index.php?id_auteur=<?php echo $menu_aut['id_auteur'];?>">
					  <?php echo $menu_aut['nom_auteur']," ",$menu_aut['prenom_auteur'];?>
				  </a>
				</li>
				<?php }}?>
            </ul>
          </div>
    </div>
  </div>