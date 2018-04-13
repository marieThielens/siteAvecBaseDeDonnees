<?php

include 'connect.php';

// INSERT....................................
if(isset($_POST['ajout']) && isset($_POST['user_username']) && isset($_POST['user_mail'])){ // ajout = name du bouton

    $user_username = $_POST['user_username'];
    $user_mail = $_POST['user_mail'];
    $user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT, array()); // Hachage du mot de passe

    $req = $bdd->prepare("INSERT INTO `users` (`user_username`, `user_mail`, `user_password`, `user_date_inscription`) VALUES (:user_username, :user_mail, :user_password, NOW())");

    $req->bindParam(":user_username", $user_username, PDO::PARAM_STR);
    $req->bindParam(":user_mail", $user_mail, PDO::PARAM_STR);
    $req->bindParam(":user_password", $user_password, PDO::PARAM_STR);
  
    $req->execute(array(
        'user_username' => $user_username,
        'user_mail' => $user_mail,
        'user_password' => $user_password
    )); 
    //  header('Location: inscription.php');  // En cas de redirection
}


// Connection .................................................

if(isset($_POST['connection']) && isset($_POST['user_username']) && isset($_POST['user_password'])){
    $user_username = $_POST['user_username'];

    //  Récupération de l'utilisateur et de son pass hashé   where colonne = nom variable $
    $req = $bdd->prepare('SELECT user_username, user_password FROM users WHERE user_username = :user_username');
    
    $req->bindParam(":user_username", $_POST['user_username'], PDO::PARAM_STR);
    $req->execute();

    $resultat = $req->fetch(); // Regarde dans la db si il y a un username qui correspond
    
    // Comparaison du pass envoyé via le formulaire avec la base
    $isPasswordCorrect = password_verify($_POST['user_password'], $resultat['user_password']);// renvoie true or false

    if (!$resultat){
        echo 'Mauvais identifiant ou mot de passe !';
        echo 'pas trouvé de résultat';
    }else
    {
        if ($isPasswordCorrect) {
            session_start();
            $_SESSION['user_id'] = $resultat['user_id'];
            $_SESSION['user_username'] = $user_username;
            echo 'Vous êtes connecté ' . $user_username . '!';
        }
        else {
            echo 'Mauvais identifiant ou mot de passe !';
        }
    }
}

// DELETE...........................................
if(isset($_POST['delete'])){ // delete = name du bouton

//  DELETE FROM table_name
//  WHERE some_column = some_value

  $delete = $bdd->prepare("DELETE FROM users WHERE user_username = :user_username");
  $delete->bindParam(":user_username", $_POST['user_username'], PDO::PARAM_STR);
  $delete->execute();
  echo 'enlevé de la base de donnée';
}
