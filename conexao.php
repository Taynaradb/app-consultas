<?php


$servidor = "localhost";
$user = "root";
$senha = "";
$banco = "bd_consultorio";

$conn = mysql_connect($servidor, $user, $senha, $banco);
echo $banco; 

if(!$conn){
    die("Conexão falhou: " . mysqli_connect_error());
}

?>