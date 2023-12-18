<?php


$servername = "basesnooze";
$username = "root"; 
$password = "root";

try{
}
$bdd = new PDO ("mysql:host=$servername; dbname=utilisateurs", $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION) //echo "Connexion réussie !";
catch (PDOException $e) {
}
echo "Erreur: ".$e->getMessage();
if(isset($_POST['ok'])){
$nom = $_POST['nom'];
Sprenom = $_POST['prenom']; $pseudo = $_POST['pseudo']; $mdp = $_POST['pass'];
$email = $_POST['email'];
$requete = $bdd->prepare("INSERT INTO users VALUES (0, pseud $requete->execute(
array(
"pseudo" => $pseudo,
"nom" => $nom,
"prenom" => $prenom,
"mdp" => $mdp,
"email" => $email
echo "Inscription réussie !";

?>
