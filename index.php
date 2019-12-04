<?php
$age = 250;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP Partie 2 Exercice 1</title>
  </head>
  <body>
    <p>
    <?php
    //Si l'utilisateur a un âge supérieur à 18 ans jusque 140 ans, le message "Vous êtes majeur" s'affichera
    if ($age >= 18 && $age < 140) { ?>
      Vous êtes majeur !
    <?php } elseif ($age > 0 && $age < 18) { ?>
      Vous êtes mineur !
    <?php } else { ?>
      Vous avez fait une erreur !
    <?php } ?>
   </p>
  </body>
</html>
