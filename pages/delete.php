<?php

require_once "../classes/NoteManager.php";

$note = new NoteManager();

$note->delete($_GET['id']);

header("Location: read.php");
exit();