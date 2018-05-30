<?php 
// Conecta-se com o MySQL 
$link=mysqli_connect("localhost", "root", ""); 

// Seleciona banco de dados 
mysqli_select_db($link,"sessao"); 
?>