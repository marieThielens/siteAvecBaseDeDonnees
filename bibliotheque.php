<?php include("include/header.php"); ?>


<section id="genre">
  <div class="container">
    <div class="row">
      <form method="post" action="traitement/genre.php">
         <p>
         <!-- Ici, une variable$_POST['choix']sera créée, et elle contiendra le choix qu'a fait l'utilisateur. S'il a choisi « Choix 3 », la variable$_POST['choix']sera égale a la value correspondant, c'est-à-direchoix3-->
      <select name="genre">
          <option value="action">Film d'action</option>
          <option value="animation">Film d'animation</option>
          <option value="documentaire">Documentaire</option>
          <option value="fantastique">Fantastique</option>
          <option value="horreur">Horreur</option>
          <option value="fiction">Science-fiction</option>

      </select>
         </p>
             <input type="submit" value="Envoyer" />
      </form>
    </div>
  </div>
</section>


<section id="genreImage">

  <div class="categorieFilm">
    <h2>Film d'action</h2>
    <a href="genre.php?movie_genre=action"><img class="imgBibliotheque" src="assets/images/affiches/action.jpg" alt="Film d'action"></a>
  </div>

  <div class="categorieFilm">
    <h2>Film d'animation</h2>
    <a href="genre.php?movie_genre=animation"><img class="imgBibliotheque" src="assets/images/affiches/animation.jpg" alt="Film d'animation"></a>
  </div>

  <div class="categorieFilm">
    <h2>Film documentaire</h2>
    <a href="genre.php?movie_genre=documentaire"><img class="imgBibliotheque" src="assets/images/affiches/documentaire.jpg" alt="Film documentaire"></a>
  </div>

  <div class="categorieFilm">
    <h2>Film fantastique</h2>
    <a href="genre.php?movie_genre=fantastique"><img class="imgBibliotheque" src="assets/images/affiches/fantastique.jpg" alt=""></a>
  </div>

  <div class="categorieFilm">
    <h2>Film d'horreur</h2>
    <a href="genre.php?movie_genre=horreur"><img class="imgBibliotheque" src="assets/images/affiches/hooreur.jpeg" alt=""></a>
  </div>

  <div class="categorieFilm">
    <h2>Science-fiction</h2>
    <a href="genre.php?movie_genre=fiction"><img class="imgBibliotheque" src="assets/images/affiches/fiction.jpg" alt=""></a>
  </div>



</section>




<?php include("include/footer.php"); ?>
