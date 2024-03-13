<?php

session_start();
require_once(__DIR__ . '/variables.php');
require_once(__DIR__ . '/functions.php');


$postData = $_POST;

/**
 * Validation de formulaire
 */

if (isset($postData['email']) && isset($postData['password'])){
  if(!filter_var($postData['email'] , FILTER_VALIDATE_EMAIL)){
    $_SESSION['LOGIN_ERROR_MESSAGE'] = 'Il faut un email valide pour soummetre le formulaire';

  } else {
    foreach ($users as $user){
      if (
        $user['email'] === $postData['email'] &&
        $user['password'] === $postData['password']){

          //enregistrement de email en session
          $_SESSION['LOGGED_USER'] = [
            'email' => $user['email'],
            'user_id' => $user['user_id'],
          ];
        }
        
        {
          
      }
    }
    if (!isset($_SESSION)){
      $_SESSION ['LOGIN_ERROR_MESSAGE'] = sprintf (
        'Les informations envoyées ne permettent pas de vous identifier : (%s %s)',
        $postData['email'],
        strip_tags($postData['password'])
      );
    }
  }

  redirectToUrl ('index.php');
}

?>