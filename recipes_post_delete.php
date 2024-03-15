<?php
session_start();

require_once(__DIR__ . '/isConnected.php');
require_once(__DIR__. '/config/mysql.php');
require_once(__DIR__. '/databaseconnect.php');
require_once(__DIR__. '/functions.php');

$postData = $_POST;

if(!isset($postData['id'])|| !is_numeric($postData['id'])){
  echo'Il faut un identifiant pour supprimer la recette';
  return;
}

$deleteRecipeStatement = $mysqlClient->prepare('DELETE FROM recipes WHERE recipe_id = :id');
$deleteRecipeStatement->execute([
  'id'=>(int)$postData['id'],
]);

redirectToURL('index.php');
?>

