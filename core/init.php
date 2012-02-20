<?php
session_start();
include_once('mvc/Controlador.php');
new Controlador($_GET['c'], $_GET['a']);
?>
