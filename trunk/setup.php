<?php

function GenerateConfigForm() {
  echo <<<FORM
<form action="setup.php" method="post">
  <input type="hidden" name="submitted" value="true" />
  DB_HOST: <input type="text" name="DB_HOST" /><br />
  DB_USERNAME: <input type="text" name="DB_USERNAME" /><br />
  DB_PASSWORD: <input type="text" name="DB_PASSWORD" /><br />
  <input type="submit" />
</form>

FORM;
}


  include('includes/header.php');
if(!isset($_POST['submitted'])) {
  GenerateConfigForm();
}
else {
  $host = $_POST['DB_HOST'];
  $username = $_POST['DB_USERNAME'];
  $password = $_POST['DB_PASSWORD'];
  $config_string = <<<CONFIG
<?php
    \$DB_HOST = $host;
    \$DB_USERNAME = $username;
    \$DB_PASSWORD = $password;
    \$config_initialized = true;
?>
CONFIG;
 file_put_contents("config.php",$config_string);
}
  include('includes/footer.php');
?>