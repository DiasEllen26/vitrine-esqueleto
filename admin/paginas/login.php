<?php
     //verificação para não cair em erro 
    if ($_POST) {

        $login = $_POST["login"] ?? NULL;
        //echo login;
        $senha = $_POST["senha"] ?? NULL;

        //buscar usuário com o mesmo login
        $sql = "SELECT id, nome, login, senha FROM usuario 
        WHERE login = :login AND ativo = 'S' limit 1";
        $consulta = $pdo->prepare($sql);
        $consulta->bindParam(":login", $login);
        $consulta->execute();
        

        //transofrma retorno em objeto
        $dados = $consulta->fetch(PDO::FETCH_OBJ);
        
        //exibe dados na tela
        //var_dump($dados);

        //caso não encontre id no banco aparece mensagem de erro
        if (!isset($dados->id) ) {
            mensagemErro("Usuario não encontrado ou inativo.");
        }

    }
?>
<div class="login">
    <h1 class="text-center text-primary">Efetuar Login</h1>
        <form method="POST">
            <label for="login">Login:</label>
                <input type="text" name="login" id="login" class="form-control" required
                placeholder="Por favor insire seu login">
                
                <br>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" class="form-control" required
                placeholder="Por favor insira sua senha">
                <br>
                <button type="submit" class="btn btn-primary w-100"> Entrar</button>
        </form>
</div>
