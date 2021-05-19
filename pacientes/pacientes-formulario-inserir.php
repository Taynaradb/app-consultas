<?php include "../includes/cabecalho.php"; ?>

<form action="pacientes-inserir.php" name="formulario-pacientes" method="post">
  <div class="row mt-3">
    <div class="col">
      <label for="">Nome:</label>
      <input class="form-control" type="text" name="nome">
    </div>
    <div class="col">
      <label for="">Telefone:</label>
      <input class="form-control" type="text" name="telefone">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
      <label for="">Data de nacimento:</label>
      <input class="form-control" type="date" name="data_nascimento">
    </div>
    <div class="col mt-4">

      <input type="hidden" value="Não" name="convenio">
      <input type="checkbox" value="Sim" name="convenio">
      <label for="">Convenio:</label>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
      <label for="diagnostico">
        Convenio:
      </label>
      <textarea class="form-control" name="diagnostico" id="">

      </textarea>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col">
     <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
  </div>


</form>





<?php include "../includes/rodape.php"; ?>