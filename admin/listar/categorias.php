<div class="card">
    <h2 class="text-center text-primary p-2">Lista Categorias</h1>
    <table class="table table-hover table-striped table-bordered">
    <thead>
        <tr>
        <td scope="col" class="bg-primary text-light">ID</td>
        <td scope="col" class="bg-primary text-light">Nome</td>
        <td scope="col" class="bg-primary text-light">Opção</td>
        </tr>
    </thead>
    <tbody>
    <?php 
        $sql = "SELECT * FROM categoria";
        $consulta = $pdo->prepare($sql);
        $consulta->execute();
        $dados = $consulta->fetchAll(PDO::FETCH_OBJ);

        foreach ($dados as $categoria) {
        ?>  
        <tr scope="row" class="table-primarytext-dark">
            <td><?=$categoria->id?></th>
            <td><?=$categoria->nome?></td>
            <td class="d-flex justify-content-around"> 
                <a href="cadastros/categorias/<?=$categoria->id?>" class="btn btn-success">
                <i class="fas fa-edit"></i>Alterar
                </a>
                <form action="./deletar/categorias" method="post">
                 <input type="hidden" name="id" value="<?=$categoria->id?>">
                 <button type="submit" class="btn btn-danger" value="Deletar"><i class="bi bi-trash3-fill"></i> Deletar</button>
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>
</div>
<?php 