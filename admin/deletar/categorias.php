<?php
    if(isset($_POST)) {
        $id= $_POST["id"] ?? NULL; 
        if(empty($id)) {
        mensagemErro("ERRO PARA DELETAR");
        }else{
            $sql = "DELETE FROM categoria WHERE id= :id";
            $consulta= $pdo->prepare($sql);
            $consulta->bindParam(":id", $id);
            $consulta->execute();

            echo "<script>location.href='./listar/categorias'</script>";
            exit;
        }
    }
?>