<?php
requre('config.php');
if(!$config_initialized) {
  header('Location: ./setup.php');
 }
?>
