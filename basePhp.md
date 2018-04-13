# Php

## Protection

```PHP

function traiteMot($mot){
    $ sortie = htmlentities(strip_tags(trim($mot)) ENT_QUOTES);
    return $sortie;
}

```

- hthmlentities : convertit les balises html en caractère. Ex = `<strong>gras</strong>` => `&lt;strong&gt;gras&lt;/strong&gt;`
- strip_tags : supprime les balises HTML et PHP d'une chaîne. Ex = `<strong>gras</strong>` => `gras`
- trim : supprime les espaces (ou d'autres caractères) en début et fin de chaîne
- ENT_QUOTES : Convertit les guillemets doubles et les guillemets simples.

## Débugger son code / Erreurs php

1. Headers already sent by .. : vérifier avant après la balise php si il n'y a pas un espace
2. Undefined index : PHP n'arrive pas à trouver une clef dans votre tableau

```PHP

function dd($variable){
  echo '<pre>'; // Mise en forme (retour à la ligne)
  var_dump($variable);
  echo '</pre>';
  die(); // Pour couper l'exécution du script et ne voir que cette erreur en particulier.
}

```

Si je veux débbuguer la variable results par exemple : `dd($results)`

3. Trying to get property of non object : vous essayez d'accéder à une propriété (ou une méthode) sur un élément qui n'est pas un objet. `echo $user->name;` mais qui est un tableau par exemple.

4. 5.Parse error_  syntax error, unexpected.mp4 : une erreur de syntaxe (un mot mal écrit)

