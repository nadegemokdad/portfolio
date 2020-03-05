<?php
/* CONFIGURATION */

// adresse e-mail qui sera dans le champ De de l'e-mail.
$from = '';

// adresse e-mail qui recevra l'e-mail avec la sortie du formulaire
$sendTo = 'nadegemokdad@orange.fr';

// objet de l'e-mail
$subject = 'Nouveau message';

// formation des nomss de champs et leurs traductions.
// nom de variable de tableau => Texte à afficher dans l'e-mail
$fields = array('name' => 'Name', 'surname' => 'Surname', 'need' => 'Need', 'email' => 'Email', 'message' => 'Message'); 

// message qui sera affiché lorsque tout est OK
$okMessage = 'Formulaire de contact soumis avec succès. Merci, je vous répondrai bientôt!';

// en cas de problème, afficher le message suivant.
$errorMessage = 'Veuillez réessayer plus tard';


// si vous ne déboguez pas et n'avez pas besoin de rapport d'erreurs, désactivez-le par error_reporting (0);
error_reporting(E_ALL & ~E_NOTICE);

try
{

    if(count($_POST) == 0) throw new \Exception('Form is empty');
            
    $emailText = "You have a new message from your contact form\n=============================\n";

    foreach ($_POST as $key => $value) {
        // Si le champ existe dans le tableau $ fields, incluez-le dans l'e-mail 
        if (isset($fields[$key])) {
            $emailText .= "$fields[$key]: $value\n";
        }
    }

    // All the neccessary headers for the email.
    $headers = array('Content-Type: text/plain; charset="UTF-8";',
        'From: ' . $from,
        'Reply-To: ' . $from,
        'Return-Path: ' . $from,
    );
    
    // Envoyer e-mail
    mail($sendTo, $subject, $emailText, implode("\n", $headers));

    $responseArray = array('type' => 'success', 'message' => $okMessage);
}
catch (\Exception $e)
{
    $responseArray = array('type' => 'danger', 'message' => $errorMessage);
}


// si demandé par la demande AJAX, retourne la réponse JSON
if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $encoded = json_encode($responseArray);

    header('Content-Type: application/json');

    echo $encoded;
}
// sinon afficher simplement le message
else {
    echo $responseArray['message'];
}
