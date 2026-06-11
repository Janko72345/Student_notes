<?php

require_once "classes/User.php";

$message = "";

if(isset($_POST['register']))
{
    $user = new User();

    if(
        $user->register(
            $_POST['username'],
            $_POST['email'],
            $_POST['password']
        )
    )
    {
        $message = "Registracija uspešna!";
    }
    else
    {
        $message = "Greška!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Registracija</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card">

<div class="card-header">
<h3>Registracija</h3>
</div>

<div class="card-body">

<?php echo $message; ?>

<form method="POST">

<div class="mb-3">
<input
type="text"
name="username"
class="form-control"
placeholder="Korisničko ime"
required>
</div>

<div class="mb-3">
<input
type="email"
name="email"
class="form-control"
placeholder="Email"
required>
</div>

<div class="mb-3">
<input
type="password"
name="password"
class="form-control"
placeholder="Lozinka"
required>
</div>

<button
type="submit"
name="register"
class="btn btn-primary">
Registruj se
</button>

</form>

</div>
</div>
</div>
</div>
</div>

</body>
</html>