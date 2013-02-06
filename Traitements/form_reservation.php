<?php
require_once('../database/connexion.php');//Appel du ficher de connexion à la bdd
//$sql_="select * from reservation";
//$query_soc=mysql_query($sql_soc) or die(mysql_error());
?>

<html>
<head>
  <title>Formulaire d'inscription</title>
  <script language="javascript" src="controle.js">
  </script>
</head>
<body>
<form action="ajout_participant.php" name="form1" method="post" onsubmit="return verif();">
<table align="center" width="62%" border="1">
<caption>
Formulaire de réservation de ressources
</caption>
<tr>
  <td width="49%">Désignation de la ressource</td>
  <td width="51%">--recupéré automatiquement---;</td>
</tr>
<tr>
  <td width="49%">Coût horaire</td>
  <td width="51%">--recupéré automatiquement---;</td>
</tr>

<tr>
  
</tr>
<tr>
  <td>Date de début de réservation</td>
   <td><label>
     <input type="text" name="dateDeb" id="dateDeb">
   </label></td> 
</tr>
<tr>
  <td>Date de fin de réservation</td>
  <td><label>
    <input type="text" name="dateFin" id="dateFin">
  </label></td>
</tr>
<tr>
  <td>Informations sur l'intervenant</td>
  <td><label>
    <textarea name="intervenant" id="intervenant" cols="45" rows="5"></textarea>
  </label></td>
</tr>
<tr>
  <td colspan="2" bgcolor="gray" align="center">
    <input type="submit" name="soumission" value="valider">
  </td>
</tr>
</table>
</form>
</body>
</html>
 
