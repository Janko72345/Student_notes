<?php

require_once "../../classes/SubjectManager.php";

$subject = new SubjectManager();

$result = $subject->read();

?>

<!DOCTYPE html>
<html>
<head>
<title>Predmeti</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Predmeti</h2>

<a href="create.php" class="btn btn-success mb-3">
Dodaj predmet
</a>

<table class="table table-bordered">

<tr>
    <th>ID</th>
    <th>Naziv</th>
    <th>Profesor</th>
    <th>Akcije</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?= $row['id'] ?></td>
<td><?= $row['naziv'] ?></td>
<td><?= $row['profesor'] ?></td>

<td>

<a href="update.php?id=<?= $row['id'] ?>"
class="btn btn-warning">
Izmeni
</a>

<a href="delete.php?id=<?= $row['id'] ?>"
class="btn btn-danger">
Obriši
</a>

</td>

</tr>

<?php } ?>

</table>
</div>

</body>
</html>