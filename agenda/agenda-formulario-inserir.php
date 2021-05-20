<?php 
include "../includes/cabecalho.php"; 
include "../includes/conexao.php"; 
?>

<form name="cadastro-agenda" method="post" action="agenda-inserir.php">

<div class="row mt-3">
    <div class="col">
      <label for="">Data:</label>
      <input class="form-control" type="date" name="data">
    </div>
    <div class="col">
      <label for="">Hora:</label>
      <input class="form-control" type="time" name="hora">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <label for="">Médico:</label>
      <select class="form-control" name="id_medico" id="">
      <?php
       $sqlBuscarMedicos = "SELECT * FROM tb_medicos";
       $listaDeMedicos = mysqli_query($conexao, $sqlBuscarMedicos);

       while($medico = mysqli_fetch_assoc($listaDeMedicos)){
           echo "<option value='{$medico['id']}'>";
           echo $medico['nome'];
           echo "</option>";
       }
      ?>
      </select>
    </div>
    <div class="col mt-4">
      <label for="">Sala:</label>
      <input class="form-control" type="text" name="sala">
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      <label for="">Paciente:</label>
      <select class="form-control" name="id_paciente" id="">
      <?php
       $sqlBuscarPacientes = "SELECT * FROM tb_pacientes";
       $listaDePacientes = mysqli_query($conexao, $sqlBuscarPacientes);

       while($paciente = mysqli_fetch_assoc($listaDePacientes)){
           echo "<option value='{$paciente['id']}'>";
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