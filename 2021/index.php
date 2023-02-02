<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee&family=Roboto:wght@100&display=swap" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="../assets/css/navbar.css">
<!-- <div class="navbar">
    <div class="nav-element" onclick="location.href = 'sujets/'">
        <h2>LOGO</h2>
    </div>
    <div class="nav-element nav-right " onclick="location.href = 'sujets/'">
        <h2>Sujets</h2>
    </div>
</div> -->
<?php
$annee = 2021;
include("../data.php");
?>
<title>
    <?= $projetName ?>
</title>
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

<h1 style="text-align:center; color: white; margin-top: 5%;" class="text-6xl">Sujet BIA de l'année :
    <?= $annee ?>
</h1>
<br><br><br><br>
<script>
    function isImage(id) {
        let i = document.getElementById(id)
        if (!i.nodeName)
            return false;
        else
            return i.nodeName.toLowerCase() === 'img';
    }
    function showAfter2(id) {
        if (id.parentNode.id) {
            let k = parseInt(id.parentNode.id) + 1;
            if(isImage(k)) { // if element is an image, display the question AFTER the image.
                document.getElementById(k + 1).style.animation = "fadeIn 1s forwards";
            }
            document.getElementById(k).style.animation = "fadeIn 1s forwards";
            // scroll on page
            let element = document.getElementById(k);
            element.scrollIntoView({behavior: "smooth", block: "center", inline: "nearest"});
        }
    }
    function displayImage(id) {
        document.getElementById(k).style.animation = "fadeIn 1s forwards";
    }
    function showAfter(id) {
        let k = parseInt(id);
        document.getElementById(k).style.animation = "fadeIn 1s forwards";
    }
</script>
<div class="div">
    <?php

    $row = 1;
    if (($handle = fopen("https://docs.google.com/spreadsheets/d/11_snEamFjCDEeJQOVtf7VdkGbgRiKeiyFee5GsLB-7w/export?format=csv", "r")) !== FALSE) { // the url will be used time of dev... 
        $firstDiv = "0";
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = 1; // met ici la taille du tableau
            $row++;

            for ($c = 0; $c < $num; $c++) {
                if ($data[7] == "2021") {
                    if ($data[1] == "image") {
                        if($data['10'] == "TRUE") {
                            echo "<img style=\"text-align:center; opacity:1;\" src=\"" . $data[9] . "\" id=\"" . $row . "\">";
                        } else {
                            echo "<img style=\"text-align:center; opacity:0;\" src=\"" . $data[9] . "\" id=\"" . $row . "\">";
                        
                        }
                        break;
                    } else {

                        echo "<div id=\"" . $row . "\" class=\"question\" style=\"opacity: 0;\">";
                        echo "<h2 class=\"text-2xl\" style=\"color: white;text-align: left;\">" . $data[0] . " " . $data[1] . "</h1>";
                        echo "<select class=\"select\" name=\"" . $data[8] . $data[0] . "\">";
                        echo "<option>" . $data[3] . "</option>";
                        echo "<option>" . $data[4] . "</option>";
                        echo "<option>" . $data[5] . "</option>";
                        echo "<option>" . $data[6] . "</option>";
                        echo "</select>";
                        echo "<button onclick=\"showAfter2(this)\" class=\"confirm-button\">Confirmer</button>";
                        echo "<div class=\"py-4\"><div class=\"w-full border-t border-gray-300\"></div></div>";
                        echo "</div>";
                        if ($firstDiv == "0") {
                            $firstDiv = $row - 1;
                            echo "<script>showAfter(" . $row . ")</script>";
                        }
                    }
                }
            }

        }
        fclose($handle);
    }
    ?>
</div>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: radial-gradient(ellipse at bottom, #0d1d31 0%, #0c0d13 100%);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .div {
        text-align: left;
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 90%;
    }

    :root {
        --background-gradient: linear-gradient(30deg, #f39c12 30%, #f1c40f);
        --gray: #34495e;
        --darkgray: #2c3e50;
    }

    select {
        /* Reset Select */
        appearance: none;
        outline: 0;
        border: 0;
        box-shadow: none;
        /* Personalize */
        flex: 1;
        padding: 0 1em;
        color: #fff;
        background-color: var(--darkgray);
        background-image: none;
        cursor: pointer;
    }

    /* Remove IE arrow */
    select::-ms-expand {
        display: none;
    }

    /* Custom Select wrapper */
    .select {
        position: relative;
        display: flex;
        width: 20em;
        height: 3em;
        border-radius: .25em;
        overflow: hidden;
    }

    /* Arrow */
    .select::after {
        content: '\25BC';
        position: absolute;
        top: 0;
        right: 0;
        padding: 1em;
        background-color: #34495e;
        transition: .25s all ease;
        pointer-events: none;
    }

    /* Transition */
    .select:hover::after {
        color: #f39c12;
    }

    .question {
        margin-top: 5%;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
    }


    .confirm-button {
        background-color: var(--darkgray);
        color: white;
        border: none;
        border-radius: 5px;
        margin-top: 1%;
        width: 20%;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>