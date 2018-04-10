<?php include("include/header.php"); ?>

<h1>Page Par genre</h1>

<?php


try{
// A changer : dbname=nomDeVotreBaseDeDonnées  array= pour activer les erreurs requetes sql
$bdd = new PDO('mysql:host=localhost;dbname=alloFilms;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

// On traite l'erreur (ex probleme de mot de passe, php rsique d'afficher
// toute la ligne. Pour éviter ce problème :
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


// Notre requete à la base de donnée
// SELECT = prend moi; * = tout ;FROM = de quel tableau ? film = mettreLeNomDeVotreTable
// WHERE = quelle colonne du tableau ?
// prepare = on prépare la requete que l'on represente avec le marqueur ?
$reponse = $bdd->prepare('SELECT * FROM films WHERE movie_genre= ? ORDER BY movie_title');
// On execute la requete en appelant execute et en lui transmettant les paramètres
$reponse->execute(array($_GET['movie_genre']));

// Si j'avais plusieurs requêtes
//$req->execute(array($_GET['movie_genre'], $_GET['duree_max']));


// Pour que mySql ne traite cette réponse ligne par ligne, c'est à dire par entrée.
// fetch veut dire en anglais "va chercher"
// On le met dans une boucle qui va etre répétée autant de fois qu'il y a d'entrée
while ($donnees = $reponse->fetch())
{
        // montre moi les titre dans un h2
        echo '<h2>' . $donnees['movie_title'] . '</h2>' . '<br />';
        // La description des films
        echo '<div class="descrition">' . $donnees['movie_description'] . '</div>' . '<br />';

}
$reponse->closeCursor(); // Termine le traitement de la requête
?>


<?php include("include/footer.php"); ?>
