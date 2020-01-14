

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css"/>
  <title>Formulaire</title>
</head>
<body>
  <h2>Me contacter</h2>
<section id="style-form">
  <form action="formulaire_serveur.php" method="POST" id="formulaire">
 
  <label for="nom"> VOTRE NOM :</label>
    <input name="nom" type="text" id="nom" class="encart"  placeholder="votre nom">
    <label for="mail"> VOTRE ADRESSE MAIL :</label>
    <input  name = "mail" type="mail" id="email" class="encart">
    <label for="message"> VOTRE MESSAGE :</label>
    <textarea name="message" id="message" class="encart" cols="30" rows="10" placeholder="Votre message"></textarea>
    <input type="submit" value="Envoyer !" id="envoyer">
  </form>
</section>
  
  <!-- <script src="src/script.js"></script> -->


</body>
</html>