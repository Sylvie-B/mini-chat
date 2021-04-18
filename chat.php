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
                        $ref = $_POST["pseudo"];

                        $stmt = $dbCo->prepare("SELECT * FROM user WHERE pseudo='$ref'");
                        $state = $stmt->execute();

                        if($state) {
                            switch (count($stmt->fetchAll())){
                                case 0:
                                    echo "utilisateur ajouté";
                                    $pdo->addUser($dbCo, $_POST["pseudo"], $_POST["password"]);
                                    break;
                                case 1:
                                    foreach ($stmt->fetchAll() as $user) {
                                        echo "utilisateur trouvé : ".$user['pseudo'];
                                    }
                                    break;
                            }
                        }
                        else {
                            echo "une erreur est surnenue";
                        }
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

