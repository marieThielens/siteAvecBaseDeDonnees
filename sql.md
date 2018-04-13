# Sql

Clé primaire : identifie de manière unique une entrée dans une table(l'id en général). Lui donner l'index PRIMARY,

## Se connecter à la base de donnée

L'extension PDO : c'est un outil complet qui permet d'accéder à n'importe quel type de base de données. On peut donc l'utiliser pour se connecter aussi bien à MySQL que PostgreSQL ou Oracle.

## Requêtes

### Requêtes SQL 

```SQL

SELECT column_name
FROM table1
INNER JOIN table2 ON table1.column_name = table2.column_name (lier des tables)

ORDER BY column_name DESC (ordonner)
LIMIT 0, 10 (nombre de résultats)

/*   message posté entre 2 dates */
SELECT pseudo, message, date FROM minichat WHERE date >= '2010-04-02 00:00:00' AND date <= '2010-04-18 00:00:00'

```

```PHP
$reponse = $bdd->query('SELECT * FROM membres');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
?>
    <p>
    <strong>Jeu</strong> : <?php echo $donnees['name']; ?><br />
```
### Fonctions SQL

```SQL

SELECT UPPER(nom) FROM membres (met en majuscule)
SELECT AVG(age) FROM membres (fait moyenne ages) 
SELECT LOWER(nom) AS nom_min FROM jeux_video (met en minuscule)

```

- ROUND : arrondi en nombre décimal


## Requêtes préparées

Requête stoquée en mémoire (pour la session courante). Beaucoup plus sûr, pour empêcher les injection SQL



