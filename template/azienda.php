<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Azienda
    </title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="views\static\css\generale.css"/>
    <link rel="stylesheet" href="views\static\css\azienda.css"/>
</head>
<body>
<section class="header">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?action=home">Dog Run</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=azienda">Azienda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=info">Chi siamo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=contatti">Contattaci</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=login">
                                <button class="button">Login</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?action=registrazione">
                                <button class="button">Registrati</button>
                            </a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

<div class="titoloAzienda">
    <h1>Una descrizione su quello che facciamo </h1>
</div>
<div class="contenuto">
    <p class="acontC">creamo un percorso di allenamento adatto al tuo cane, per esempio
        sapevi che si dovrebe iniziare a correre a un ritmo lento o adatto al cane.
        All'inizio, lascia che sia lui a stabilire il ritmo per poter capire quanto veloce
        e per quanto tempo riuscirà a correre e starti dietro. Per i primi giorni correre
        per qualche minuto è perfetto. Piano piano si rafforzerà e guadagnerà massa muscolare.</p>
    <img class="imgC" src="../views/static/foto/cane.jpg" alt=""/>
</div>
</body>
<footer class="footer">
    <div class="contF">&copy; 2022</div>
</footer>
</html>