<?php include "../includes/cabecalho.php" ; ?>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
<h4 class="m-5">Cadastrar paciente</h4>
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
            <label class="form-label">CRM:</label><input name="crm" class="form-control">
        </p>
        <p class="col-6">
            <label class="form-label">Especialidade:</label>
            <select name="especialidade" class="form-select">
                <option value="Cardiologista">Cardiologista</option>
                <option value="Nutricionista">Nutricionista</option>
                <option value="Ortopedista">Ortopedista</option>
            </select>
        </p>
    </div>
    <p>
        <button type="submit" class="btn btn-success">Salvar</button>
    </p>
</form>
<?php include "../includes/rodape.php" ; ?>