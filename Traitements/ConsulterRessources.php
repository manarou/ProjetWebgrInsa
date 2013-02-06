<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html">
	<!--<link rel="stylesheet" type="text/css" href="./styles/formulaire.css" />-->
	<title>Accueil</title>
</head>
<body>
<?php
	$position = '../';
	include('../accueil.php'); 
?>
<div>

<?
include('../database/connexion.php');


				// On s'connecte à la BD
				$bdd = connexionBD() or die ("<br> Echec de connexion à la base de données </br>");
				
				// Execution !
				$requete = $bdd->prepare('SELECT Designation,Description,CoutHoraire FROM ressources');
				$requete->execute());

//$sql_ress="select * from ressources";
//$query_ress=mysql_query($sql_ress) or die(mysql_error());
?>
<!-- <form action="ajout_participant.php" name="form1" method="post" onsubmit="return verif();"> -->
<table align="center" width="62%" border="1">
<caption>
Liste des ressources
</caption>

<tr>
   <th>Designation</th><th>description</th><th>Cout horaire</th>
</tr>


<?php
/*
//tant qu'il y a des ressoruces
while ($donnees = $requete->fetch())
				{
					echo '<p> Ressource : ' . $donnees['Designation'] . '<br/></p>';
				
/* echo"<tr>
      <td>$ress->Designation</td>
      <td>$ress->Descrption</td>
      <td>$ress->CoutHoraire</td>
	  

     </tr>";
	
}
*/

?>

</table>
<!-- </form> -->
	
</div>
</body>
</html>