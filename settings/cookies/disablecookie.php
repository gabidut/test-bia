<?php

if(isset($_COOKIE['cookie']) && $_COOKIE['cookie'] == 'true') {
    setcookie('cookie', 'false', time() + 365*24*3600);
    setcookie('points', '', time() - 3600);
    header('Location: ../../index.php?cookie');
} else {
    header('Location: ../../index.php');
}