<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nasci = $_POST['data_nascimento'];
$convenio = $_POST['convenio'];
$diag = $_POST['diagnostico'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico) values('{$nome}' , '{$telefone}' , '{$nasci}' , '{$convenio}', '{$diag}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header ("location: pacientes-listar.php");
}else{
    echo "Algum erro aconteceu";
}

?>