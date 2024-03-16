<?php
@require 'connect.php';

setcookie("email", null);
setcookie("role", null);

header('Location: index.php');
exit();
