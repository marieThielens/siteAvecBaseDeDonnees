<?php

include "include/header.php"; 
include "core/request.php";

?>

<h1 class="center">Page de contact</h1>

<!-- ................................... Créer un compte........................... -->
<p id="pInscrire">S'inscrire</p>
<form  id="formInscription" action="" method="post">  

  <fieldset id="parentInput">
    <input class="input" type="text" name="user_username" placeholder="Nom" required>
    <input class="input" type="email" name="user_mail" placeholder="Courriel" required>
    <input class="input" type="password" name="user_password" placeholder="Mot de passe" required>

    <button class="btn btn-sm" id="boutonAjout" name="ajout" value="add" type="submit">Créer un compte</button>
</fieldset>

</form>

<!-- .....................................Se connecter...............................-->
<div id="login">
    <p>Se connecter</p>

        <form action="" method="post">
        <fieldset>
             <input type="text" name="user_username" placeholder="pseudo">
              <input type="password" name="user_password" placeholder="Mot de passe">
            <!-- <input type="checkbox" name="" id="" value="connection">
            <label for="">Connection automatique</label> -->
            <button type="submit" name="connection">Se connecter</button>
        </fieldset>
    </form>

<!-- ....................................Se désinscrire...................................-->
<div id="delete">
    <p>Se désinscrire</p>
    <fieldset>
        <form action="" method="post">
            <input type="text" name="user_username" placeholder="Nom d utilisateur">
            <button name="delete">Se désinscrire</button>
        </form>
    </fieldset>
</div>


<!--  ......................Déconnection...............-->
 
 <button type="submit" name="deconnection"><a href="core/deconnect.php">deconnection</a> </button>

<?php include("include/footer.php"); ?>
