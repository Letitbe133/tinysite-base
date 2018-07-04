<?php

// error_reporting(E_ALL);

// Vérification que le formulaire a été posté
if (isset($_POST['submit'])) {

  // Vérification anti bots
  if (empty($_POST['check'])) {

    // vérification que les champs ne sont pas vides
    if (!empty($_POST['nom'] && $_POST['email'] && $_POST['objet'] && $_POST['message'])) {
      $to       = 'mylene@cooldev.xyz';
      $nom     = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
      $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
      $objet    = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
      $message  = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
      $consent  = $_POST['consent_contact'];
      $today = date("j M Y");
      $mention = "En renseignant votre adresse mail, vous acceptez qu'il soit utilisé dans le cadre de relations commerciales.";
      $headers =  "From:" . $email . "\r\n" .
      "Reply-To:" . $email . "\r\n" .
      "Content-Type: text/html; charset=ISO-8859-1\r\n" .
      "X-Mailer: PHP/" . phpversion();

      // Vérification du consentement de l'utilisateur
      if ($consent == "on") {
        $objet_consent = "Acceptation utilisation commerciale email";
        $message_consent = "Date : " .$today . "\n // Adresse mail : " . $email . "\n // Consentement : " . $mention . "\n // Origine : " . $_SERVER['REQUEST_URI'] . "\n";

        // Envoi du mail confirmant le consentement
        mail($to, $objet_consent, $message_consent, $headers);

        // Envoi du mail de feedback
        mail($to, $objet, $message, $headers);
        $feedback = "Super " . $nom . "! On revient vers vous rapidement ;)";
  
      } else {
        $feedback = "Vous devez accepter l'utilisation de votre adresse mail pour des relations commerciales";
      }
    } else {
      $feedback = "Ooops ! Il doit manquer quelque chose... ";
    }  
  }
} else {
  $feedback = '';
};

?>
