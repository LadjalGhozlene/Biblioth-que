<?php
include("modele/fonctionadmin.php");
$err="";$msg="";
if (isset($_GET['isbn'])){$isbn = $_GET['isbn'];}
    $supprimer=new fonction();
    try
    {
        if(1)
        {    
            $supprimer->supplivre($isbn);
        }
        else
        {
            throw new Exception('Un probleme est produit lors de votre inscription!!! Merci de ressayer plus tard ^_^');
        }
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }
header("Location: ges-livre.php?err=$err&msg=$msg");
exit();
?>