<link href="https://www.w3schools.com/w3css/4/w3.css">

<?php
if (!empty($_POST)) {
    require_once("./model/especialidade.php");
    $especialidade = new Eespecialidade;
    $especialidade->setNome($_POST['especialidade']);
    $especialidade->setValor_dia($_POST['valor']);
    $especialidade->add();
}
?>

<form method="POST" class="container">
    
    <div class="form-group">
        <label for="especialidade">Nome da Especialidade</label>
        <input type="text" class="form-control" id="especialidade" name="especialidade"  require>
    </div>
   
    <div class="form-group">
        <label for="valor">Valor do dia</label>
        <input type="number" class="form-control" id="valor" name="valor"  require>
    </div>

    
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="reset" class="btn btn-primary">Cancelar</button>


  

</form>