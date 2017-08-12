<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$BasedeDados = "minhabase";

$conecta = mysqli_connect($host, $usuario, $senha, $BasedeDados);
if(!$conecta){
    echo "Nao Conectou".mysqli_errno($conecta);
}
