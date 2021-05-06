<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Assets/style.css">
    <title>Mini Chat</title>
</head>
<body>
    <header>
        <h1>Mini chat</h1>
        <div id="headBand">
            <img id="way" src="./img/feetWay.png" alt="footprints path">
            <img id="cats" src="./img/cats3.png" alt="three cats">
        </div>
    </header>
    <div class="connexion">
        <form method="post" action="index.php">
            <div id="frame">
                <div>
                    <label for="userPseudo">Pseudo</label>
                    <input id="userPseudo" type="text" name="pseudo">
                </div>
                <div>
                    <label for="password">mot de passe</label>
                    <input id="password" type="text" name="password">
                </div>
                <button id="signIn" type="submit">valider</button>
            </div>
            <div id="button">
                <button class="btn" type="submit" name="connexion">Connexion</button>
                <button class="btn" type="submit" name="inscription">Inscription</button>
            </div>
        </form>

    </div>

    <section>
        <div id="container">
            <div id="chat">
                <div id="dialog">
                    <span>Let's talk about cats ! :</span>
                    <div id="usersTxt">
                        <!--    display pseudo : message    -->
                    </div>
                </div>
                <div id="online">
                    <span>Online cats :</span>
                    <div id="name">
                        <!--          online user display          -->
                    </div>
                </div>
            </div>
            <footer>
                <input type="text" id="userMessage" placeholder="votre message" name="userMessage">
                <button id="message" type="submit">
                    <img src="./img/paw01.png" title="miaou" alt="paw">
                </button>
            </footer>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="Assets/app.js"></script>
</body>
</html>
<?php

if(isset($_POST['pseudo']) && $_POST['password']){
    $pseudo = $_POST["pseudo"];
    $passw = $_POST["password"];
    $_SESSION["pseudo"] = $pseudo;
    $_SESSION["password"] = $passw;
}



