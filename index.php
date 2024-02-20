<?php
session_start();
include_once('./Core/autoload.php');
MyAutoload::start();

if(isset($_GET['r'])) {
    $request = $_GET['r'];
    $router = new Router($request);
}
else {
    $request = 'accueil';
    $router = new Router($request);
    $router->redirect($request);
}

// Faire ici tous les contrôles d'authentification et de droits d'accès

// Users::create([
//     "username" => $username,
//     "email" => $email,
//     "password" => $password
// ]);

// FIn des contrôles d'accès

$router->renderController();