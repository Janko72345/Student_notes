<?php

require_once "classes/Session.php";

Session::logout();

header("Location: login.php");
exit();

?>