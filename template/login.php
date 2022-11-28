<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Login
    </title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="views\static\css\generale.css"/>
    <link rel="stylesheet" href="views\static\css\login.css"/>
</head>
<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php?action=home">Dog Run</a>
                </div>
            </nav>
        </div>
    </section>
    <div class="containerM">
        <div class="header1">
            <h2>Login</h2>
        </div>
        <form class="form" id="form" method="post">
            <div class="formControll">
                <label>E-mail</label>
                <input type="text" placeholder="e-mail" name="email" id="email"/>
            </div>
            <div class="formControll">
                <label>Password</label>
                <input type="password" placeholder="password" name="password" id="password"/>
            </div>
            <div class="formControllError">
                <?php
                if ($_GET['action'] == 'errore') {
                    echo " Controlla e inserisci nuovamente i dati";
                }
                ?>
            </div>
            <button type="submit" class="buttonSubmit">Login</button><br>
            <p class="info">Nuovo su questo sito? <a class="link" href="index.php?action=registrazione">Registrati</a></p><br>
            <p class="info">Hai dimenticato la password? <a class="link" href="index.php?action=recuperaPassword">Recupera password</a></p>
        </form>
        <script src="views\static\javascript\registrazione.js"></script>
        <?php
        require_once 'controller/authentication/loginController.php';
        (new loginController())->login();
        ?>
    </div>
</body>
<footer class="footer">
    <div class="contF">&copy; 2022</div>
</footer>
</html>