<?php include "../includes/conexao.php"; 

$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$id_paciente = $_POST['id_paciente'];

$sqlInserir = "INSERT INTO `tb_agenda`(`data`, `hora`, `id_medico`, `sala`, `id_paciente`) 
VALUES ('{$data}','{$hora}',{$id_medico},'{$sala}',{$id_paciente});";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado){
    header ("location: agenda-listar.php?mensagem=cadastro");
}else{
    echo "Algo deu errado";
}

?>