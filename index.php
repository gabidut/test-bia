<?php

include("data.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        <?= $projetName ?>
    </title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<header>
    <h1 id="nav-title"><a href="#">
            <?= $projetName ?>
        </a></h1>
    <nav>
        <ul>
            <li><a href="sujets">Sujets</a></li>
            <li><a href="about">À propos</a></li>
            <li><a href="help">Aide</a></li>
        </ul>
    </nav>
</header>

<body>

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>
