<?php
session_start();
require('connexion.php');




  //Tuteur
  $nomTuteur = $_POST['nomTuteur'];
  $prenomTuteur = $_POST['prenomTuteur'];
  $profession = $_POST['profession'];
  $telephoneTuteur = $_POST['telephoneTuteur'];

    // //Apprenant
    $telephoneTuteur = $_POST['telephoneTuteur'];
    $nomApprenant = $_POST['nomApprenant'];
    $prenomApprenant = $_POST['prenomApprenant'];
    $dateDeNaissance = $_POST['dateDeNaissance'];
    $lieuDeNaissance = $_POST['lieuDeNaissance'];
    $genre = $_POST['genre'];
    $ville = $_POST['ville'];
    $etablissement = $_POST['etablissement'];
    $formation = $_POST['formation'];
    $telephoneApprenant = $_POST['telephoneApprenant'];
    $email = $_POST['email'];
    $photo = $_POST['photo'];


    // if (isset($_POST['telephoneApprenant']))
    // {
    //     $_POST['telephoneApprenant'] = htmlspecialchars($_POST['telephoneApprenant']); // On rend inoffensives les balises HTML que le visiteur a pu entrer
    
    //     if (preg_match("#^0[1-68]([-. ]?[0-9]{2}){4}$#", $_POST['telephoneApprenant']))
    //     {
    //         echo 'Le ' . $_POST['telephoneApprenant'] . ' est un numéro <strong>valide</strong> !';
    //     }
    //     else
    //     {
    //         echo 'Le ' . $_POST['telephoneApprenant'] . ' n\'est pas valide, recommencez !';
    //     }
    // }
    

    
//On insère les données reçues du tuteur
    
  $insert = $connect->prepare("
  INSERT INTO tuteur (nomTuteur, prenomTuteur, profession, telephoneTuteur)
  VALUES(?, ?, ?, ?)");

  $insert->execute(array($nomTuteur, $prenomTuteur, $profession,$telephoneTuteur));
    

   //On insère les données reçues de l'apprenant
   $insert = $connect->prepare("
   INSERT INTO apprenant ( telephoneTuteur, nomApprenant, prenomApprenant,  dateDeNaissance, lieuDeNaissance, genre, ville, etablissement, formation, 
   telephoneApprenant, email, photo)
   VALUES(?,?,?, ?, ?, ?, ?, ?,?, ?, ?,?)");

$insert->execute(array($telephoneTuteur, $nomApprenant, $prenomApprenant, $dateDeNaissance, $lieuDeNaissance, $genre, $ville, $etablissement, $formation,
 $telephoneApprenant, $email, $photo));
    

        //On renvoie l'utilisateur vers la page de remerciement
        // header('Location:remerciement.html');
    
    
?>