<?php
require_once 'conexao.php';
$sql = "SELECT * FROM clientes";
$query = mysqli_query($conecta, $sql);