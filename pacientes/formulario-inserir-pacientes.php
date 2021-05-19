<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-pacientes" method="post" action="pacientes-inserir.php">
    <div class="row">
        <p class="col-6">
            <label class="form-label">Nome:</label><input name="nome" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Telefone:</label><input name="telefone" class="form-control">
        </p>
    </div>
    <div class="row">
        <p class="col-6">
            <label class="form-label">Data de nascimento:</label><input name="data" type="date" class="form-control">
        </p>
        <p class="col-6 mt-4 text-center">
            <input type="hidden" value="Não" name="convenio">
            <input type="checkbox" value="Sim" name="convenio">
            <label class="form-label" style="font-size: 20px;">Convenio</label>
        </p>
    </div>
    <div class="row">
        <p class="col">
            <label class="form-label">Diagnostico:</label>
            <textarea name="diagnostico" id="" class="form-control" rows="3"></textarea>
        </p>
    </div>
    <p>
        <button type="submit" class="btn btn-success">Salvar</button>
    </p>
</form>
<?php include "../includes/rodape.php" ; ?>