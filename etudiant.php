<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbetudiants";

// connexion a la base de donnée
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifier la connexion
if ($conn->connect_error) {
  die("La connexion a échoué : " . $conn->connect_error);
}

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
  }
 
//Insertion des donnée
$sqc= "INSERT INTO `etudiants` ( `prenom`, `nom`, `filiere`, `note`)
 VALUES ( '', '', '',  )";
$req = mysqli_query($conn, $sqc);

echo "------------Insertion de donnée-----------".'<br>';
echo " Insertion reussie".'<br>';


// mise a jour
$sqlU= "UPDATE `etudiants` SET `prenom` = 'Sanata', `nom` = 'keita', `filiere` = 'GRH', `note` = '17' WHERE `etudiants`.`matricule` = 9";
$reqU = mysqli_query($conn, $sqlU);

echo "------------Update des donnée-----------".'<br>';
echo " Update reussie".'<br>';




//Requête SQL pour supprimer un enregistrement
$sqlz = "DELETE FROM `etudiants` WHERE matricule = ";

$liste = mysqli_query($conn, $sqlz);




echo "-----------Suppression de donnée -----------".'<br>';


$conn->close();
?>