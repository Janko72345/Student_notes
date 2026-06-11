<?php

require_once "classes/Session.php";

Session::check();

?>

<!DOCTYPE html>
<html lang="sr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Notes Platform</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12">

            <div class="card shadow">
                <div class="card-body text-center">

                    <h1>
                        Dobrodošao,
                        <?php echo $_SESSION['username']; ?>
                    </h1>

                    <p class="text-muted">
                        Platforma za deljenje digitalnih beležaka među studentima
                    </p>

                </div>
            </div>

        </div>
    </div>

    <div class="row mt-4">

        <!-- Beleške -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">

                    <h3>📚 Beleške</h3>

                    <p>
                        Pregled, izmena i brisanje studentskih beležaka.
                    </p>

                    <a href="pages/read.php"
                       class="btn btn-success">
                        Upravljanje beleškama
                    </a>

                </div>
            </div>
        </div>

        <!-- Dodavanje beleške -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">

                    <h3>➕ Nova beleška</h3>

                    <p>
                        Dodaj novu belešku u bazu podataka.
                    </p>

                    <a href="pages/create.php"
                       class="btn btn-primary">
                        Dodaj belešku
                    </a>

                </div>
            </div>
        </div>

        <!-- Predmeti -->
        <div class="col-md-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">

                    <h3>📖 Predmeti</h3>

                    <p>
                        Upravljanje predmetima i profesorima.
                    </p>

                    <a href="pages/subjects/read.php"
                       class="btn btn-warning">
                        Predmeti
                    </a>

                </div>
            </div>
        </div>

    </div>

    <div class="row mt-4">

        <div class="col-md-12">

            <div class="card shadow">
                <div class="card-body text-center">

                    <a href="logout.php"
                       class="btn btn-danger btn-lg">
                        Odjava
                    </a>

                </div>
            </div>

        </div>

    </div>

</div>

</body>
</html>