<?php

require_once "../classes/NoteManager.php";
require_once "../config/Database.php";

$db = new Database();
$conn = $db->getConnection();

$subjects = $conn->query("SELECT * FROM subjects");

$message = "";

if(isset($_POST['save']))
{
    $note = new NoteManager();

    if($note->create($_POST))
    {
        $message = "Beleška uspešno dodata!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Dodaj belešku</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

<h2>Dodavanje beleške</h2>

<p><?php echo $message; ?></p>

<form method="POST">

<div class="mb-3">
    <input
        type="text"
        name="title"
        class="form-control"
        placeholder="Naslov"
        required>
</div>

<div class="mb-3">
    <textarea
        name="description"
        class="form-control"
        placeholder="Opis"></textarea>
</div>

<div class="mb-3">

    <select
        name="subject_id"
        class="form-control">

        <?php while($subject = $subjects->fetch_assoc()) { ?>

            <option value="<?= $subject['id'] ?>">
                <?= $subject['naziv'] ?>
            </option>

        <?php } ?>

    </select>

</div>

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