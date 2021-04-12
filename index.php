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
    <div id="container">
        <header>
            <h1>Mini chat</h1>
            <div id="headBand">
                <img id="way" src="./img/feetWay.png" alt="footprints path">
                <img id="cats" src="./img/cats3.png" alt="three cats">
            </div>
        </header>
        <section>
            <div id="user">
                <label for="pseudo">Entrez votre pseudo</label>
                <input type="text" name="pseudo">
                <button id="pseudo" type="submit">
                    <img src="./img/paw01.png" title="Go" alt="paw">
                </button>
            </div>
            <div id="chat">
                <div id="dialog">
            <!--          dialog display        -->
                </div>
                <div id="online">
                    <span>Online cats :</span>
            <!--          user display          -->
                </div>
            </div>
            <footer>
                <input type="text" id="message" placeholder="votre message" name="userMessage">
                <button id="converse" type="submit">
                    <img src="./img/paw01.png" title="miaou" alt="paw">
                </button>
            </footer>
        </section>
    </div>
    <script src="app.js"></script>
</body>
</html>

<?php
