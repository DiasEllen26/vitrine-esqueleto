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
            <td> 
                <a href="cadastros/categorias/<?=$categoria->id?>" class="btn btn-success">
                <i class="fas fa-edit"></i>
                </a>
                <form action="./deletar/categorias" method="post">
                    <input type="hidden" name="id" value="<?=$categoria->id?>">
                    <input type="submit" class="h-25" value="Deletar">
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