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
                <button type="button" class="btn btn-warning">Alterar</button>
                <form action="./deletar/categorias" method="post">
                    <input type="hidden" name="id" value="<?=$categoria->id?>">
                    <input type="submit" class="btn btn-danger" value="Deletar">
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
//BUSCAR TODAS AS CATEGORIAS COM SQL OK
//INCLUIR O RETORNO DO SQL DENTRO DA TABELA OK
//ADD UMA NOVA COLUNA NA TABELA CHAMADA OPÇÃO OK
//ADD NA COLUNA DE OPÇÕES O BOTÃO DE EXCLUIR E EDITAR OK 
//ESCREVER FUNCIONALIDADE PARA EXCLUIR UMA CATEGORIA
//ESCREVER FUNCIONALIDADEP ENVIAR O ID DA CATEGORIA O ID DA CATEGORIAP O FORMULARIO DE CADATRAR E 
//VALIDAR P CARREGAR OS DADOS 