<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<link rel="stylesheet" href="assets/style.css">

</head>
<body>

<header>
<section id="sectionHeader">

    <div id="nav">
      <nav>
        <ul>
          <li><a href="index.php">Bibliothèque</a></li>
          <li><a href="inscription.php">S'inscrire</a></li>
        </ul>
      </nav>
      </div>

</section>

</header>

<?php
session_start();
if (isset($_SESSION['user_id']) AND isset($_SESSION['user_username']))
{
    echo 'Bonjour ' . $_SESSION['user_username'];
}
?>
