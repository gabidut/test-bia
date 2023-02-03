<!doctype html>
<html lang="en">
<?php

include("../data.php");

?>

<head>
    <meta charset="utf-8">
    <?php include("../assets/elements/meta.php"); ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Test BIA - Sujets</title>
    <meta name="copyright" content="Copyright 1999-2021. Plesk International GmbH. All rights reserved.">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/navbar.css">
</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&amp;family=Roboto:wght@100&amp;display=swap"
    rel="stylesheet">
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
    <div class="global">
        <section class="main" style="height: 10%;">
            <h1 style="color: white; font-size: 150%; margin-top: 20px; margin-left: 10px;"> Sujets des années
                précédentes : </h1>
        </section>
        <section class="sujets-news">
            <?php

            $row = 1;
            if (($handle = fopen("../assets/data/sujets.csv", "r")) !== FALSE) { // the url will be used time of dev... 
                while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                    $row++;
                    // var_dump($data);
                    for ($c = 0; $c < 1; $c++) {
                        echo "<div class='card' style='width: 18rem;'>";
                        echo "<img class='card-img-top' src='../assets/images/sujets/" . $data[3] . ".jpg' alt='Card image cap'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $data[0] . "</h5>";
                        echo "<a href='/" . $data[3] . "/' class='btn btn-primary'>Accèder au questions</a>";
                        echo "</div>";
                        echo "</div>";
                    }

                }
                fclose($handle);
            }
            ?>
        </section>
    </div>
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap');

    .global {
        background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
        height: 100vh;
        display: flex;
        flex-direction: column;
    }

    * {
        font-family: 'Montserrat', sans-serif;
    }

    .main {
        width: 100%;
        font-family: 'Montserrat', sans-serif;
        background-repeat: repeat-x;
        padding-left: 10%;
    }

    .sujets-news {
        border: #ecffea 2px solid;
        height: 90%;
        width: 80%;
        margin-left: 10%;
        border-radius: 20px;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .card {
        margin: 5%;
        background: linear-gradient(280deg, rgb(22, 49, 82) 0%, rgb(30, 36, 72) 100%);
    }

    .card-title {
        color: white;
        font-family: 'Roboto', sans-serif !important;
    }
    .card {
        height: 25% !important;
    }
</style>