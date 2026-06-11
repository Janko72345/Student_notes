<?php

require_once "../../classes/SubjectManager.php";

$subject = new SubjectManager();

if(isset($_POST['save']))
{
    $subject->create($_POST);

    header("Location: read.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dodaj predmet</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Dodaj predmet</h2>

<form method="POST">

<input
type="text"
name="naziv"
class="form-control mb-3"
placeholder="Naziv predmeta"
required>

<input
type="text"
name="profesor"
class="form-control mb-3"
placeholder="Profesor"
required>

<button
type="submit"
name="save"
class="btn btn-primary">
Sačuvaj
</button>

</form>

</div>

</body>
</html>