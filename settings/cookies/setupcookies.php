<?php
function setCookies() {
    if(!isset($_COOKIE['cookie'])) {
        setcookie('cookie', 'true', time() + 365*24*3600);
    } else {
        setcookie('points', '0', time() + 365*24*3600);
    }
}

if(isset($_GET['cookie'])) {
    // Add div to display cookie message
    echo '
    <div class="warning">
        <h1 class="warning-title">✅ Enregistré !</h1>
        <p class="warning-content">Votre choix concernant les cookies a été enregistré.</p>
    </div>
    ';
}
?>