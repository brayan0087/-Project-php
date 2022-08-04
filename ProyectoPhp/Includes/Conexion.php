<?php
$server='localhost';
$username='root';
$password='';
$database='proyecto';
$db = mysqli_connect($server,$username,$password,$database);
mysqli_query($db,"SET NAMES 'utf8'");

//Iniciar la sesión

if (!isset($_SESSION)){session_start();}





?>