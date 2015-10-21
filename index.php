<?php
	
/**
 * Run application
 */

// Démarrage de la session
session_start();

// Erreurs PHP
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors', 'on');

// Définition du fuseau horaire
date_default_timezone_set('Europe/Paris');

// Chargement du Loader
include_once 'lib/Cook/Loader.php';
$loader = new \Cook\Loader();

// Lancement de l'application
$app = new \Cook\Application\Application();
$app->run();