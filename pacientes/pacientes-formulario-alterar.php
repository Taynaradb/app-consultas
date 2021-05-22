<?php include "../includes/cabecalho.php"; 

include "../includes/conexao.php"; 

$id_paciente = $_GET['id'];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente}";
$listaDePacientes = mysqli_query($conexao, $sqlBusca);

$nome = $telefone = $convenio = $data_nascimento = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
    $data_nascimento = $paciente['data_nascimento'];
}
?>

<form action="pacientes-alterar.php" name="formulario-pacientes" method="post">

<input type="hidden" name="id_paciente" value="<?php echo $id_paciente ; ?>">

  <div class="row mt-3">
    <div class="col">
      <label for="">Nome:</label>
      <input class="form-control" value="<?php echo $nome ; ?>" name="nome">
    </div>
    <div class="col">
      <label for="">Telefone:</label>
      <input class="form-control" name="telefone" value="<?php echo $telefone ; ?>" >
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <label for="">Data de nacimento:</label>
      <input class="form-control" type="date" value="<?php echo $data_nascimento ; ?>" name="data_nascimento">
    </div>
    <div class="col">
    <?php
      $marcado = "";
      if($convenio == 'sim'){
          $marcado = "checked";
      }
      ?>
   
      <input type="hidden" value="não" name="convenio">
      <input type="checkbox" value="sim" name="convenio" <?php echo $marcado ; ?> >
      <label for="">Convenio:</label>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <label for="diagnostico">
        Convenio:
      </label>
      <textarea class="form-control" name="diagnostico"><?php echo $diagnostico ; ?></textarea>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
     <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>

</form>





<?php include "../includes/rodape.php"; ?>