<?php 

$connexion = mysqli_connect("localhost","root","","universite");

$select_etudiant = "SELECT * FROM etudiant e INNER JOIN inscription i ON e.NumEtudiant = i.NumEtudiant";
$resultats_select_etudiant = mysqli_query($connexion,$select_etudiant);

$select_responsable = "SELECT * FROM responsable";
$resultats_select_responsable = mysqli_query($connexion,$select_responsable);

while ($ligne=mysqli_fetch_row($resultats_select_etudiant)){
	echo "Num Etudiant :  ".$ligne[0]."<br>";
	echo "Nom :  ".$ligne[1]."<br>";
	echo "Date de Naissance :  ".$ligne[3]."<br>";
	echo "Université :  ".$ligne[1]."<br>";
	echo "Date d'inscription :  ".$ligne[3]."<br><br>";
}

while ($ligne=mysqli_fetch_row($resultats_select_responsable)){
	echo "Nom :  ".$ligne[1]."<br>";
	echo "Département :  ".$ligne[2]."<br><br>";
}

mysqli_close($connexion);


?>
