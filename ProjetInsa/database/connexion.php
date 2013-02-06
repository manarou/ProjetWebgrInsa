<?php

	/*$dbname="ProjetInsa";
	$host="localhost";
	$account="root";
	$password="";*/

	/*fonction de connexion  à la BD */	
	function connexionBD(){
		include("variables.php");
		$param = 'mysql:host=' . $host . ';dbname=' . $dbname;
		return(new PDO($param, $account, $password));
	}
	
	
	
	/*function connexionBD(){
		include("variables.php");
		$link=mysqli_connect($host,$account,$password);
		$base=mysqli_select_db($link,$dbname);
		return($link);
	}*/
	
	/*fonction de deconnexion de la BD*/
	function deconnexionBD($link){
		if(mysqli_close($link)){
			echo ("<br> Deconnexion reussi</br>");
		}
		else {
			echo ("<br> Echec de deconnexion </br>");
		}
	}
?>

<!--
/*
/*variables	
$login=$_POST['login'];
$motDePasse=$_POST['mdp'];
$categorie=$_POST['categorie'];
$consommation=(int)$_POST['consommation'];
$volume_reservoire=$_POST['volume'];
$carburant=$_POST['carburant'];
$compte=3000-(int)$_POST['prix'];

$conn=connexionBD() or die ("<br> Echec de connexion à la base de données</br>");
// /*insertion des infos ds la BD/
$sqli="INSERT INTO internaute VALUES('$login','$motDePasse',$compte";
$sqlv="INSERT INTO vehicule VALUES('$categorie',$consommation,$volume_reservoire,'$carburant',0,0)";
$resulti=mysqli_query($conn,$sqli);
$resultv=mysqli_query($conn,$sqlv);

deconnexionBD($conn) or die ("<br> Echec de deconnexion à la base de données </br>");
echo "login :$login,
		mot de passe : $motDePasse, 
		categorie:$categorie,
		consommation:$consommation,volume_reservoire:$volume_reservoire,
		carburant:$carburant,
		compte_utilisateur:$compte";
*/
?>
-->
