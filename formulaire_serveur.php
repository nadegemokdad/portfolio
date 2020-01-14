
<?php

// if (isset ($POST[ "mail"]) && (isset ($POST[ "nom"]) &&(isset ($POST[ "message"])
// autre façon de restreindre caracteres

// créa de variable avec recup du formulaire avec machin post qui permet de recup donnés visiteur?

$mai = $_POST["nom"];
$mail = $_POST["mail"];
$message = $_POST["message"];
$dest="nadegemokdad@orange.fr";
$headers = "des trucs en plus comme from mail ou reply-To";

// ex specialchars : $message = htmlspecialchars ($_POST["message"];);
$erreur;
$verif = false; // etat du formulaire par defaut

// conditions de conformité du mail
//(si) les imputs sont remplis (!= negation)
if ($nom != "" && $mail !="" && $message !="") {
    //le du mail contenu est conforme (si)
    if (preg_match(" /^.+@.+\.[a-zA-Z]{2,}$/", $mail)){
        // suppression des chevrons potentiels
        strip_tags($nom);
        strip_tags($mail);
        strip_tags($message);
        $verif = true;// alors il est juste
    }// sinon il est faux  
    else {
        $erreur = "Votre email n'est pas valide";
  }
}//sinon (il est vide)
else {
    $erreur = "Un ou plusieurs champs sont vides";
}
/*autres soluces specialchars transforme code pouvant ê saisi par chaine caract
 voir aussi isset*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    //generation du message 
    // si la verrif est ok alors on envoie ce message
    if ($verif == true) {
        echo "Votre mail a bien été envoyé sous :<br>". "Nom du client :" .$nom. "<br>Mail : " .$mail ."<br>Message : " .$message ;  
    }
    //sinon on en voie un  message d'erreur
    else{
        echo $erreur;
    }
    //mail($dest, $nom, $message,$headers) :
    
    
// creation de dsn (  pr rattacher form à  base de donnée )+verification  de la connection 
try {
    $dsn=new PDO("mysql:dbname=mail_portfolio;host=localhost;charset=utf8","root","");
} catch (PDOEXCEPTION $e) {
   echo "erreur connexion";
}
// ajouter les données : INSERT on peut utiliser les accents graves à la place des ''
$dsn->query("INSERT INTO contact (nom, mail,message) VALUES('{$nom}' , '{$mail}' , '{$message}');");

 ?>
    
</body>
</html>
