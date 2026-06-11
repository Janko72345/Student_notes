<?php

require_once "../../classes/SubjectManager.php";

$subject = new SubjectManager();

$subject->delete($_GET['id']);

header("Location: read.php");
exit();