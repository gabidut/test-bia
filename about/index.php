<?php

include("../data.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $projetName ?>
    </title>
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>
    <meta charset="UTF-8">

    <header>
        <h1 id="nav-title"><a href="#">
                <?= $projetName ?>
            </a></h1>
        <nav>
            <ul>
                <li><a href="../sujets">Sujets</a></li>
                <li><a href="../about">À propos</a></li>
                <li><a href="../help">Aide</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Développement</h1>
        <p>Ce site web à été développé par Gabriel Duteurtre à des fins d'entrainement uniquement.</p>
        <p>Ce projet ne représente pas un examen réel. Il peut contenir de potentiels erreurs (auquel cas je vous invite à le signaler).</p>
        <h1>Utilisation des cookies</h1>
        <p>Des cookies sont utilisés dans ce projet uniquement à des fins de sauvegarde des progression des sujets. Aucun usage publicitaire n'est effectué.</p>
        <p>Cependant si vous souhaitez les désactiver vous pouver cliquer ici :</p>
        <button onclick="location.href = '../settings/cookies/disablecookie.php'">Désactiver les cookies</button>
    </main>



</body>

</html>

<style>
    header {
        width: auto;
    }

    main {
        margin: 10%;
        color: white;
    }
    body {
        background-color: #E6E5E1;
        width: 100vw;
        height: 100vh;
        margin: 0;
        background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
        font-family: 'Roboto', sans-serif;
    }
    button {
        background-color: #404876;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-size: 1.2em;
        font-family: 'Roboto', sans-serif;
        cursor: pointer;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />