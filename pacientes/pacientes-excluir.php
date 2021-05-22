

<?php include "../includes/conexao.php";

$id_paciente = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_pacientes WHERE id = {$id_paciente}";

$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    header ("location: pacientes-listar.php");
}else{
    echo "Algum erro aconteceu";
}


?>









