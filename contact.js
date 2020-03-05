$(function () {


    $('#contact-form').validator();


    // lorsque le formulaire est soumis
    $('#contact-form').on('submit', function (e) {

        // "if" le validateur n'empêche pas l'envoi du formulaire
        if (!e.isDefaultPrevented()) {
            let url = "contact.php";

            // POST valeurs en arrière-plan l'URL du script
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    // data = JSON objet renvoyé par contact.php
                    // Recevons le type du message: succès x danger et applications 
                    let messageAlert = 'alert-' + data.type;
                    let messageText = data.message;

                    // boîte d'alerte (html)
                    let alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';

                    // "if" messageAlert et messageText
                    if (messageAlert && messageText) {
                        // injecter l'alerte aux div .messages sous form
                        $('#contact-form').find('.messages').html(alertBox);
                        // vider le formulaire
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    })
});