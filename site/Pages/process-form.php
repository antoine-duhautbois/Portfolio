<?php
// Inclure l'autoloader de Composer
require_once __DIR__ . '/../vendor/autoload.php';  // Remonter de deux niveaux pour accéder à vendor/autoload.php

// Inclure les fichiers nécessaires de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Votre clé secrète hCaptcha
$secret_key = 'ES_967cc855763e4722b6682ac1dc88abd1';  // Remplacez par votre clé secrète hCaptcha

// Initialiser une variable pour l'erreur
$error_message = '';

// Vérification de la réponse hCaptcha
$captcha_response = $_POST['h-captcha-response'];

if (!$captcha_response) {
    $error_message = 'Veuillez compléter le captcha';
}

// Si la vérification échoue, on continue mais on affiche l'erreur après le formulaire
$verify_url = 'https://hcaptcha.com/siteverify';
$response = file_get_contents($verify_url . '?secret=' . $secret_key . '&response=' . $captcha_response);
$response_keys = json_decode($response, true);

if ($response_keys['success'] !== true) {
    $error_message = 'La vérification hCaptcha a échoué. Veuillez réessayer.';
}

// Récupérer les données du formulaire
$nom = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Vérifier que tous les champs sont remplis
if (empty($nom) || empty($email) || empty($message)) {
    $error_message = 'Tous les champs doivent être remplis';
}

// Créer une instance PHPMailer
$mail = new PHPMailer(true);

// Si il n'y a pas d'erreur, on envoie l'email
if (empty($error_message)) {
    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'antoine.duhautbois@sts-sio-caen.info';  // Remplacez par votre email
        $mail->Password   = 'Laure50700tte@';     // Remplacez par votre mot de passe d'application
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Destinataire
        $mail->setFrom('antoine.duhautbois@sts-sio-caen.info', 'Portfolio');
        $mail->addAddress('antoine.duhautbois@sts-sio-caen.info', 'Antoine');  // Adresse email du destinataire

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = 'Nouveau message de contact du site PortFolio';
        $mail->Body    = "<h3>Message de $nom ($email)</h3><p>$message</p>";
        $mail->AltBody = "Message de $nom ($email)\n\n$message";

        // Envoyer l'email
        $mail->send();

        // Message de confirmation et redirection après 5 secondes
        echo 'Le message a été envoyé avec succès';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "contact.php";
                }, 5000); // 5000 ms = 5 secondes
              </script>';
    } catch (Exception $e) {
        echo "Erreur : " . $mail->ErrorInfo;
    }
} else {
    // Si il y a une erreur, on l'affiche sous le formulaire
    echo '<div style="color: red; text-align: center;">' . $error_message . '</div>';
}
?>
