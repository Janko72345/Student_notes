<?php

require_once "../../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

$id = $_GET['id'];

if(isset($_POST['update']))
{
    $naziv = $_POST['naziv'];
    $profesor = $_POST['profesor'];

    $conn->query("
        UPDATE subjects
        SET naziv='$naziv',
            profesor='$profesor'
        WHERE id=$id
    ");

    header("Location: read.php");
    exit();
}

$result = $conn->query(
    "SELECT * FROM subjects WHERE id=$id"
);

$row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Izmena predmeta</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

<h2>Izmena predmeta</h2>

<form method="POST">

<input
type="text"
name="naziv"
class="form-control mb-3"
value="<?= $row['naziv'] ?>">

<input
type="text"
name="profesor"
class="form-control mb-3"
value="<?= $row['profesor'] ?>">

<button
type="submit"
name="update"
class="btn btn-primary">
Sačuvaj izmene
</button>

</form>

</div>

</body>
</html>