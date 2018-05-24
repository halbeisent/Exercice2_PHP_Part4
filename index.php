<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2 Partie 4 PHP</title>
  </head>
  <body>
    <p><?php
      $helloVar = 'Hello World!';
      function helloWorld($helloVar)
      {
        return $helloVar;
      }
      echo helloWorld($helloVar);
    ?></p>
  </body>
</html>
