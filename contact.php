<?php include("include/header.php"); ?>

<h1 class="center">Page de contact</h1>


<div class="main">

<section id="sectionFormulaire">

    <form action="">
    <table>

        <tr>
            <td><label for="prenom">Prénom :</label></td>
            <td><input type="text" class="form-control" id="prenom"></td>
        </tr>

        <tr>
            <td><label for="nom">Nom :</label></td>
            <td><input type="text" class="form-control" id="nom"></td>
        </tr>

        <tr>
            <td><label for="mail">Adresse mail :</label></td>
            <td><input type="email" class="form-control" id="mail"></td>
        </tr>

        <tr>
        <td><label for="message">Votre demande :</label></td>
        <td><textarea class="form-control" id="message"></textarea></td>
      </div>
      </tr>
      </table>
      <button type="submit" class="btn btn-default">Envoyer</button>


    </form>

</section>

</div>

<?php include("include/footer.php"); ?>
