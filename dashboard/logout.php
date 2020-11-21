<?php

session_start();
session_unset();

header('Location:/dashboard/login.php');

?>