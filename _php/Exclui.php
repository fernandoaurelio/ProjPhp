<?php
 require_once './conexao.php';
 
 $id = filter_input(INPUT_GET, "id");
 
 $sqlExclusao = "DELETE FROM clientes WHERE id = $id";
 $queryExclusao = mysqli_query($conecta, $sqlExclusao);
    if(!$queryExclusao){
        echo "Nao foi possivel deletar";
    }else{
        echo "<div class='bg-success'>Excluido com Sucesso!</div>";
    }
