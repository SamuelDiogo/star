<?php
include('conexao.php');

if(empty($_POST['nome']) ||  empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "SELECT idUsuario, nome FROM usuario WHERE nome = '{$nome}' AND  senha =  md5('{$senha}) ";

$result = mysqli_query($conexao,$query);

$row = mysqli_num_rows($result);

if($row == 1){
$_SESSION['$nome'] = $nome;
header('Location: index1.php');
exit();
}else{
    header('Location: login.php');
    exit();
}

?>