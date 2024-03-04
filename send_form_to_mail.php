<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $restaurant = filter_input(INPUT_POST, 'restaurant', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $surname = filter_input(INPUT_POST, 'surname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $adress = filter_input(INPUT_POST, 'adress', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $country = filter_input(INPUT_POST, 'country', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $response = filter_input(INPUT_POST, 'response', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}

$body = "Restaurant: $restaurant\n";
$body .= "Surname: $surname\n";
$body .= "Nom: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $phone\n";
$body .= "Adresse: $adress\n";
$body .= "Code Postal: $zip\n";
$body .= "Pays: $country\n";
$body .= "Comment connaissez-vous DeliceDelice: $response";

$to = "samuel.zannou@nerdxdigital.com";
$subject = "Demande de démo";

$email = "meryl.amoussou@nerdxdigital.com";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

$send = mail($to, $subject, $body, $headers);

if ($send) {
    echo json_encode(array("status" => "success", "message" => "Votre demande a été envoyé avec succès. Nous vous contacterons après traitement de vos informations."));
} else {
    echo json_encode(array("status" => "error", "message" => "Erreur lors de l'envoi de la demande. Veuillez réessayer plus tard."));
};
