<?php
session_start();
// suppresion des variables de session
$_SESSION = array();

// destruction du fichier de session côté serveur
session_destroy();
// redirection vers la racine du dossier
header("Location: ./../index.php");