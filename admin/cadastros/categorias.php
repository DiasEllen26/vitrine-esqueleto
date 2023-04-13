<div class="card">
    <div class="card-body border border-primary rounded">
      <form method="POST" action="salvar/categorias">
        <h2 class="text-primary text-center">Categorias</h2>
          <label for="nome">Nome</label>
          <input type="text" name="nome" id="nome" class="form-control" placeholder="Inserir nome..." value="">
        <div class="form-group">
          <label for="id">ID</label>
          <input type="number" name="id" id="id" class="form-control" placeholder="Inserir ID..." required value="">
        </div>
        <button type="submit" class="btn btn-outline-primary">Cadastrar</button>
    </form>
  </div>
</div>
