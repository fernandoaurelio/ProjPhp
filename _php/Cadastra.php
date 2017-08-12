<?php
require_once './conexao.php';
$id = 0;
$razaosocial = filter_input(INPUT_POST,"razaosocial");
$nomefantasia = filter_input(INPUT_POST,"nomefantasia");
$cnpj = filter_input(INPUT_POST, "cnpj");
$ddd = filter_input(INPUT_POST, "ddd");
$telefone = filter_input(INPUT_POST, "telefone");
$site = filter_input(INPUT_POST, "site");

$sql = "INSERT INTO clientes VALUES (NULL,'$razaosocial','$nomefantasia','$cnpj','$ddd','$telefone','$site')";
$query = mysqli_query($conecta, $sql);
if(!$query){
    echo "<div class='bg-danger'> Nao Cadastrou </div>";
}else{
    echo "<script>window.location='http://localhost/Projeto/Cadastracliente.php';alert('$nomefantasia, Cadastrado com Sucesso');</script>";

}