<?php

require_once "../classes/NoteManager.php";

$note = new NoteManager();

$result = $note->read();
?>

<!DOCTYPE html>
<html>
<head>
<title>Beleške</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Sve beleške</h2>

<a href="create.php" class="btn btn-success mb-3">
Dodaj novu belešku
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Naslov</th>
<th>Opis</th>
<th>Predmet</th>
<th>Akcije</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['naziv']; ?></td>

<td>

<a href="update.php?id=<?php echo $row['id']; ?>"
class="btn btn-warning">
Izmeni
</a>

<a href="delete.php?id=<?php echo $row['id']; ?>"
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