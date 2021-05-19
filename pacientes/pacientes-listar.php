<?php include "../includes/cabecalho.php"; ?>
<hr>

<?php
include "../includes/conexao.php";

$sqlBusca = "SELECT * FROM tb_pacientes";

$listaDePacientes = mysqli_query($conexao, $sqlBusca);
?> 

<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Telefone</td>
        <td>Data de nascimento</td>
        <td>Convenio</td>
        <td>Ações</td>
    </tr>

    <?php

    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['ID']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";
        echo "<td>{$paciente['data_nascimento']}</td>";
        echo "<td>{$paciente['convenio']}</td>";
        echo "<td>{$paciente['diagnostico']}</td>";
        echo "<td><a href='#'>Alterar</a> |";
        echo "<a href='#'>Excluir</a></td>";
        echo "</tr>";
    }

    ?>

</table>


<?php include "../includes/rodape.php"; ?>