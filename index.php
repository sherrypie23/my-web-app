<?php
// Inclusion des fichiers nécessaires
require_once '/opt/applicationinsights/ApplicationInsights-PHP/ApplicationInsights.php';
require_once ('./includes/constants.php');
require_once (__SITE_ROOT__.'/classes/EncodingHandler.php');
require_once (__SITE_ROOT__.'/classes/MySQLHandler.php');
require_once (__SITE_ROOT__.'/classes/SQLQueryHandler.php');
require_once (__SITE_ROOT__.'/classes/CustomErrorHandler.php');
require_once (__SITE_ROOT__.'/classes/LogHandler.php');
require_once (__SITE_ROOT__.'/classes/RemoteFileHandler.php');
require_once (__SITE_ROOT__.'/classes/RequiredSoftwareHandler.php');

// Initialisation de l'agent Application Insights
$configPath = '/opt/applicationinsights/ApplicationInsights.json';
$applicationInsights = new ApplicationInsights($configPath);

// Vérification des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autres éléments de votre code...
