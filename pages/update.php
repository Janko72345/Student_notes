<?php

require_once "../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

$id = $_GET['id'];

if(isset($_POST['update']))
{
    $title = $_POST['title'];
    $description = $_POST['description'];

    $conn->query("
    UPDATE notes
    SET title='$title',
        description='$description'
    WHERE id=$id
    ");

    header("Location: read.php");
    exit();
}

$result = $conn->query(
"SELECT * FROM notes WHERE id=$id"
);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Izmena</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<form method="POST">

<input
type="text"
name="title"
class="form-control mb-3"
value="<?php echo $row['title']; ?>">

<textarea
name="description"
class="form-control mb-3"><?php echo $row['description']; ?></textarea>

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