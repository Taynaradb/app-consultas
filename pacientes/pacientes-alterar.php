<?php include "../includes/conexao.php"; 

    $id_paciente = $_POST['id_paciente'];
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $convenio = $_POST['convenio'];
    $diagnostico = $_POST['diagnostico'];
    $data_nascimento = $_POST['data_nascimento'];

    $sqlAlterar = "UPDATE tb_pacientes SET
                    nome = '{$nome}',
                    telefone = '{$telefone}',
                    convenio = '{$convenio}',
                    diagnostico = '{$diagnostico}',
                    data_nascimento = '{$data_nascimento}'
                    WHERE id = {$id_paciente};"
                    ;
    
    $resultado = mysqli_query($conexao, $sqlAlterar);

    
    if($resultado){
        header ("location: pacientes-listar.php");
    }else{
        echo "Alguma coisa aconteceu";
    }


?>