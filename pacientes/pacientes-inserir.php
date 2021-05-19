<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$nasci = $_POST['data'];
$convenio = $_POST['convenio'];
$diag = $_POST['diagnostico'];


include "../includes/conexao.php";
$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico) values('{$nome}' , '{$telefone}' , '{$nasci}' , '{$convenio}', '{$diag}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    echo "Paciente cadastrada com sucesso!<br>";
    echo "<a href='pacientes-listar.php'>voltar</a>";
}else{
    echo "Algum erro aconteceu";
}

?>