<?php
// verificação se método post existe
if($_POST) {
    //recebe o id e se não tiver valor incrementa nulo na variavel
    $id = $_POST["id"] ?? NULL;
    //recebe o nome e se não tiver valor incrementa nulo na variavel
    $nome = $_POST["nome"] ?? NULL;
        //verifica se o nome está vazio
        if(empty($nome)) {
            //retorna mensagem de erro 
            mensagemErro("Nome da categoria é necessário!");
        }// consultando o id da categorias onde nome no banco for igual o nome da requisição e o id diferente do id da requisição
        //retorna registros
        $sql = "SELECT id FROM categoria WHERE nome = :nome AND id <> :id";
        //preparando o sql
        $consulta = $pdo->prepare($sql);
        //setando parametro id com valor da varivel
        $consulta->bindParam(":id", $id);
        //setando parametro nome com valor da varivel
        $consulta->bindParam(":nome", $nome);
        //executa a query
        $consulta->execute();
        //transformando os dados do banco em objeto
        $dados = $consulta->fetch(PDO::FETCH_OBJ);
        //verifica se o id não estiver vazio no banco
        if (!empty($dados->id)) {
            //mensagem de erro
            mensagemErro("Já existe categoria cadastrada com esse campo");
        }
        //verifica se o id está vazio
        if (empty($id)) {
            //inserindo nome na categoria
            $sql = "INSERT into categoria (nome) VALUES (:nome)";
            //preparação do pdo
            $consulta = $pdo->prepare($sql);
            //recebendo parametros para a variavel
            $consulta->bindParam(":nome",$nome);
        //se o id não está vazio
        }else{
            //atualiza o campo nome
            $sql = "UPDATE categoria SET nome = :nome WHERE id = :id";
            //preração do sql
            $consulta = $pdo->prepare($sql);
            //setando parametro nome com valor da varivel
            $consulta->bindParam(":nome", $nome);
            //setando parametro id com valor da varivel
            $consulta->bindParam(":id", $id);
            }
            //se for inválido 
            if(!$consulta->execute()) {
                //mensagem erro
                mensagemErro("Nome da categoria é necessário!");
            }   
    //leva para a página de categorias
    echo "<script>location.href'listar/categorias'</script>";
}