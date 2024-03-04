<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

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

$body = 'Restaurant: $restaurant\n';
$body .= 'Surname: $surname\n';
$body .= 'Nom: $name\n';
$body .= 'Email: $email\n';
$body .= 'Phone: $phone\n';
$body .= 'Adresse: $adress\n';
$body .= 'Code Postal: $zip\n';
$body .= 'Pays: $country\n';
$body .= 'Comment connaissez-vous Zenchef: $response';

$sender = 'iamalltherangeatomic@gmail.com';
$receiver = 'zsamuel737@gmail.com';

if (mail($receiver, 'Demande de démo', $body, $sender)) {
    echo 'Success';
} else {
    echo 'Error';
};
