<?php
require_once './conexao.php';
$id = filter_input(INPUT_POST, "id");
$razaosocial = filter_input(INPUT_POST,"razaosocial");
$nomefantasia = filter_input(INPUT_POST,"nomefantasia");
$cnpj = filter_input(INPUT_POST, "cnpj");
$ddd = filter_input(INPUT_POST, "ddd");
$telefone = filter_input(INPUT_POST, "telefone");
$site = filter_input(INPUT_POST, "site");

$sql = "UPDATE clientes SET razaosocial = '$razaosocial',nomefantasia = '$nomefantasia',cnpj='$cnpj',ddd='$ddd',telefone='$telefone',site='$site' WHERE id = $id";
$query = mysqli_query($conecta, $sql);
if(!$query){
    echo "<div class='bg-danger'> Nao Cadastrou </div>";
}else{
    echo "<script>window.location='http://localhost/Projeto/Cadastracliente.php';alert('$nomefantasia, Alterado com Sucesso');</script>";

}
