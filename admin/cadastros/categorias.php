<?php
  $nome = NULL;
  if(!empty($id)){
    $sql = "SELECT * FROM categoria WHERE id = :id";
    $consulta = $pdo->prepare($sql);
    $consulta->bindParam(":id", $id);
    $consulta->execute();
    $dados = $consulta->fetchAll(PDO::FETCH_OBJ) ?? NULL;

    $id = $dados->id ?? NULL;
    $nome = $dados->nome ?? NULL;
    }
?>

<div class="card">
  <div class="card-header">
    <h2 class="float-left">Cadastros de Categorias</h2>
    <div class="float-right">
      <a href="listar/categorias" class="btn btn-success">Listar Categorias</a>
    </div>
  </div>
  <div class="card-body border border-primary rounded">
    <form method="POST" action="salvar/categorias">
      <h2 class="text-primary text-center">Categorias</h2>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserir nome..." required value="<?=$nome?>">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="tex5" name="id" id="id" class="form-control" placeholder="Inserir ID..." readonly value="<?=$id?>">
        </div>
        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
    </form>
  </div>
</div>