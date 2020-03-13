

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css"/>
  <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">
  <title>Formulaire de contact</title>
</head>
<body>
<?php include('header.php'); ?>

<div class=" page_contact">
  <h3> Pour me contacter</h3>
 
  <div class="row">
         
          <form id="contact-form" method="post" action="form.php" role="form">
              <div class="messages"></div>
              <div class="controls">
                  <div class="row">
                      
                          <div class="form-group">
                              <label for="form_name">Prénom *</label>
                              <input id="form_name" type="text" name="name" class="form-control"
                                  placeholder="Entrer votre Prénom *" required="required"
                                  data-error="Veuillez entrer votre Prénom.">
                              <div class="help-block with-errors"></div>
                          </div>
                     
                      
                          <div class="form-group">
                              <label for="form_lastname">Nom *</label>
                              <input id="form_lastname" type="text" name="surname" class="form-control"
                                  placeholder="Entrer votre Nom *" required="required"
                                  data-error="Veuillez entrer votre Nom.">
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                     
                          <div class="form-group">
                              <label for="form_email">Email *</label>
                              <input id="form_email" type="email" name="email" class="form-control"
                                  placeholder="Entrer une adresse mail valide *" required="required"
                                  data-error="Veuillez entrer une adresse mail.">
                              <div class="help-block with-errors"></div>
                          </div>
                      
                     
                  
                  <div class="row">
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="form_message">Message *</label>
                              <textarea id="form_message" name="message" class="form-control"
                                  placeholder="Votre Message *" rows="4" required="required"
                                  data-error="Veuillez écrire votre message."></textarea>
                              <div class="help-block with-errors"></div>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <div class="contact_button">
                          <input type="submit"  class="btn btn-success btn-send button button" value="ENVOYER">
                          </p>
                        </div>
                      </div
                      >
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12">
                      <p id="message" class="text-muted"><strong>*</strong> Les champs sont obligatoires.</p>
                  </div>
          </form>
      </div>
  </div>
</div>
</div>
</div>
  
   <script src="src/contact.js"></script> 


</body>
</html>