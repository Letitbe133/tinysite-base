<?php
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
  if (!empty($_POST['nom'] && $_POST['email'] && $_POST['objet'] && $_POST['message'])) {
    $to       = 'lionel@cooldev.xyz';
    $nom      = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL, FILTER_VALIDATE_EMAIL);
    $objet    = filter_input(INPUT_POST, 'objet', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH);
    $message  = nl2br(filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_FLAG_STRIP_HIGH));
    $headers  =  "From:" . $email . "\r\n" .
                "Reply-To:" . $email . "\r\n" .
                "MIME-Version: 1.0\r\n" .
                "Content-Type: text/html; charset=ISO-8859-1\r\n" .
                "X-Mailer: PHP/" . phpversion();
    mail($to, $objet, $message, $headers);
    $feedback = "Super " . $nom . "! On revient vers vous rapido ;)";
  } else {
    $feedback = "Ooops ! Il doit manquer quelque chose... ";
  }
} else {
  $feedback = '';
};

echo $feedback;
?>
