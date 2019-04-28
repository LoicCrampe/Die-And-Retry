<?php
# Connexion à la base de donnée
        $user = 'root';
        $pass = '';
        $bdd =  new PDO('mysql:host=localhost;dbname=videogames;', $user, $pass);
#######################################################################################
$Compte = $bdd->query('SELECT Identifiant, Password, Nom, Prenom FROM Utilisateurs');
$connexion = null; // Variable null pour indiquer que l'utilisateur n'est pas encore                         connecté
$Error = null; // Variable null pour que le site n'affiche pas d'erreur (elle sera                       remplie plus tard si les Identifiant de connexion sont incorrect)

if (isset($_POST['ID']) && isset($_POST['PSW'])){
    $ID = $_POST['ID']; //Prend la valeur entré dans Identifiant
    $PSW = $_POST['PSW'];//Prend la valeur entré dans Password
    $User = $Compte->fetchAll(); //Selectionne tous les users dans la table Utilisateurs
    for ($i=0; $i < count($User); $i++) { // Fait la vérification pour chaque user dans la base de donnée
        if ($ID == $User[$i]['Identifiant'] && $PSW == $User[$i]['Password']){
            $connexion = "1";
        }else{
            $Error = "Mauvais Identifiant ou Mot de passe";
        }
    }
}
?>
