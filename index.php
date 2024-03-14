
<?php session_start(); // $_SESSION?>

<?php 
require_once(__DIR__ . '/config/mysql.php');
require_once(__DIR__ . '/databaseconnect.php');
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Page d'accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">


  <div class="container">

  <?php require_once(__DIR__ . '/header.php'); ?>

    <h1>Site de recettes</h1>

    <!-- Formulaire de connexion -->
    <?php require_once(__DIR__ . '/login.php'); ?>



  <!--<?php if (isset($_SESSION['LOGGED_USER'])) : ?> -->

   <?php foreach(getRecipe($recipes) as $recipe):?>
  
      <article>
        <h3> <?php echo $recipe['title'];?> </h3>

        <div> <?php echo $recipe['recipe'];?> </div>

        <i> <?php echo displayAuthor($recipe['author'], $users);?></i>
      </article>
      <?php endforeach ?>
      <?php endif ?>
    </div>

  <?php require_once(__DIR__ . '/footer.php'); ?>
  
</body>
</html>