<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Registrazione
    </title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>

    <link rel="stylesheet" href="views\static\css\generale.css"/>
    <link rel="stylesheet" href="views\static\css\registrazione.css" />

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
        <h2>Crea Account</h2>
    </div>
    <form class="form" id="formReg" method="post" >

        <div class="formControll">
            <?php
            if($_GET['action'] == 'erroreR'){
                echo "<h1 style='color:#e74c3c'>Utente gia registrato</h1>";
            }
            ?>
        </div>
        <div class="formControll " >
            <label>Nome</label>
            <input type="text" name="nome" placeholder="nome" id="nome"/>
            <small>ErrorMessage</small>
        </div>
        <div class="formControll " >
            <label>Cognome</label>
            <input type="text" name="cognome" placeholder="cognome" id="cognome"/>
            <small>ErrorMessage</small>
        </div>
        <div class="formControll">
            <label>Email</label>
            <input type="email" placeholder="email" name="email" id="email"/>
            <small>ErrorMessage</small>
        </div>
        <div class="formControll">
            <label>Password</label>
            <input type="password" placeholder="password" name="password" id="password"/>
            <i class="bi bi-eye-slash" id="togglePassword"></i>
            <small>ErrorMessage</small>
        </div>
        <div class="formControll">
            <label>Conferma Password</label>
            <input type="password" placeholder="Cpassword" name="Cpassword" id="Cpassword"/>
            <small>ErrorMessage</small>
        </div>
        <div >
            <input type="checkbox" class="check" onclick="#"><a class="link" href="index.php?action=termini">Accetto Termini e Condizioni</a></input>
            <br>
            <br>
        </div>
        <button onclick="return checkInputs()">Registrati</button><br>
        <p class="info">Hai Già un Account? <a class="link" href="index.php?action=login">Login</a></p>
    </form>
    <script src="views\static\javascript\registrazione.js"></script>
    <?php
    require_once 'controller/registrazioneController.php';
    (new registrazioneController())->registraUtente();
    ?>
</div>
</body>
</html>