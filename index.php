<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title><?= include 'config/data.php' ?></title>
</head>

<body>

    <header>
        <h1>My Contact Book</h1>
    </header>

    <main class="d-flex ">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="flex-column navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=start">Start</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=contacts">Kontakte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=addcontact">Kontakt hinzufügen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php?page=legal">Impressum</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="content flex-column">
            <?php

            function headline()
            {
                $headline = "Herzlich Willkommen!";

                // Headline
                if ($_GET['page'] == "contacts") {
                    $headline = "Deine Kontakte";
                } elseif ($_GET['page'] == "addcontact") {
                    $headline = "Kontakt hinzufügen";
                } elseif ($_GET['page'] == "legal") {
                    $headline = "Impressum";
                }
                return $headline;
            }

            echo "<h2>" . headline() . "</h2>";

            // Content
            if ($_GET['page'] == "contacts") {
                echo "";
            } elseif ($_GET['page'] == "addcontact") {
                echo "
                <span class='my-3'>Auf dieser Seite kannst du einen weiteren Kontakt hinzufügen</span>
                <div class='d-flex flex-column'>
                    <input placeholder='Namen eingeben' name='name'>
                    <input class='my-2' placeholder='Telefonnummer eingeben' name='phone'>
                    <button type='submit'>Absenden</button>
                </div>
                ";
            } elseif ($_GET['page'] == "legal") {
                echo "";
            }

            ?>
        </section>

    </main>

    <footer>
        <span>copyrigth by GeryHell</span>
    </footer>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>