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
        <div id="modal">
            <form action="chat.php" method="post">
                <div>
                    <label for="userPseudo">Pseudo</label>
                    <input id="userPseudo" type="text" name="pseudo">
                </div>
                <div>
                    <label for="password">mot de passe</label>
                    <input id="password" type="text" name="password">
                </div>
                <div>
                    <input id="pseudo" type="submit">
                </div>
            </form>
        </div>
    </section>
    <script src="app.js"></script>
</body>
</html>


