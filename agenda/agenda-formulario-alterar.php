<?php 
include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 

$id_agenda = $_GET['id_agenda'];
$sqlBuscaAgenda = "SELECT * FROM tb_agenda WHERE id = {$id_agenda}";
$data = $hora = $id_medico = $sala = $id_paciente = ""; 

$listadeAgendas = mysqli_query($conexao, $sqlBuscaAgenda);
while($agenda = mysqli_fetch_assoc($listadeAgendas)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
};
?>

<form name="cadastro-agenda" method="post" action="agenda-alterar.php">
<input name="id_agenda" value="<?php echo $id_agenda ; ?>" >
<div class="row mt-3">
    <div class="col">
      <label for="">Data:</label>
      <input class="form-control" type="date" value="<?php echo $data ; ?>" name="data">
    </div>
    <div class="col">
      <label for="">Hora:</label>
      <input class="form-control" type="time" value="<?php echo $hora ; ?>" name="hora">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <label for="">Médico:</label>
      <select class="form-select" name="id_medico" value="<?php echo $id_medico ?>" id="">
      <?php
       $sqlBuscarMedicos = "SELECT * FROM tb_medicos";
       $listaDeMedicos = mysqli_query($conexao, $sqlBuscarMedicos);

       while($medico = mysqli_fetch_assoc($listaDeMedicos)){
           if($id_medico == $medico['id']){
           echo "<option value='{$medico['id']}' selected>";
           }else{
            echo "<option value='{$medico['id']}'>";
        }
           echo $medico['nome'];
           echo "</option>";
       }
      ?>
      </select>
    </div>
    <div class="col">
      <label for="">Sala:</label>
      <input class="form-control" value="<?php echo $sala ?>" type="text" name="sala">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <label for="">Paciente:</label>
      <select class="form-select" name="id_paciente" id="">
      <?php
       $sqlBuscarPacientes = "SELECT * FROM tb_pacientes";
       $listaDePacientes = mysqli_query($conexao, $sqlBuscarPacientes);

       while($paciente = mysqli_fetch_assoc($listaDePacientes)){
           if($id_paciente == $paciente['id']){
           echo "<option value='{$paciente['id']}' selected>";
       }else{
        echo "<option value='{$paciente['id']}'>";
       }
           echo $paciente['nome'];
           echo "</option>";
       }
      ?>
      </select>
    </div>
    <div class="col mt-4">
      <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>


</form>


<?php include "../includes/rodape.php"; ?>