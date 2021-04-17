<?php
    // insert DbChat for connexion
    require './DbChat.php';
    $pdo = new DbChat();
    $dbCo = $pdo->connect();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Mini Chat</title>
</head>
<body>
<header>
    <?php
    include "./headband.php";
    ?>
</header>
<section>
    <div id="container">
        <div id="chat">
            <div id="dialog">
                <span>Let's talk about cats ! :</span>
                <div>
                    <!--    display pseudo & message    -->
                    <?php

                    ?>
                </div>
            </div>
            <div id="online">
                <span>Online cats :</span>
                <div>
                    <!--          user display          -->
                    <?php
                    if (isset($_POST["pseudo"], $_POST["password"])) {

                        $pdo->addUser($dbCo, $_POST["pseudo"], $_POST["password"]);
                        echo $_POST["pseudo"];

                    }
                    ?>
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
</body>
</html>

<!--    send pseudo & password to db    -->
<!--    recup online pseudo to display      -->
<!--    send message to db       -->

