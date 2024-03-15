<?php
  if(!isset($_SESSION['LOGGED_USER'])) {
    echo('Il faut etre authentifie pour cette action');
    exit;
  };
?>