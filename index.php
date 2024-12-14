<?php
setcookie("name", "Василь");
if (isset($_COOKIE['name'])) {
    echo 'Привіт, ' . $_COOKIE["name"] . '!';
}