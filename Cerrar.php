<?php

SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();

ECHO "se cerro sesion correctamente";
header("location:Login.php");
?>