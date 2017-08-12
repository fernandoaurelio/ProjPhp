<?php
require_once 'conexao.php';

$idEdicao = filter_input(INPUT_GET, "id");
$sqlEdicao = "SELECT * FROM clientes WHERE id = $idEdicao";
$queryEdicao = mysqli_query($conecta, $sqlEdicao);
$MostrarCampos = mysqli_fetch_array($queryEdicao);

// Indicações

$id = $MostrarCampos['id'];
$razaosocial = $MostrarCampos['razaosocial'];
$nomefantasia = $MostrarCampos['nomefantasia'];
$cnpj = $MostrarCampos['cnpj'];
$ddd = $MostrarCampos['ddd'];
$telefone = $MostrarCampos['telefone'];
$site = $MostrarCampos['site'];