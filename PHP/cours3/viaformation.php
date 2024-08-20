<?php
session_start();
require_once 'functions.php';
if(verifierToken())
{
    echo 'vous avez accès à la page';
}
else
{
    echo 'accès interdit';
}
?>