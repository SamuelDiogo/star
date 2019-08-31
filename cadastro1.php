<?php
include('conexao.php');
/*
$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$sql= "select count(*) as total from cliente where  nome = '$nome'";
$result = mysqli_query($conexao,$sql);
$row =  mysqli_fetch_assoc($result);

if($row['total'] == 1) {
    $_SESSION['cliente_existe'] = true;
    header('Location: cadastro.php');
    exit();
}

$sql = "INSERT INTO usuario(nome,email,senha) VALUES ('$nome','$email','$senha'";

if($conexao->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('Location: login.php');
    exit;*/
///////////
$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha =mysqli_real_escape_string($conexao,$_POST['senha']);
$connect = mysqli_connect('localhost','root','','star');

$query_select = "SELECT nome FROM usuario WHERE nome = '$nome'";
$select = mysqli_query($connect, $query_select);
$array = mysqli_fetch_array($select);
$logarray = $array['nome'];
 
  if($nome == "" || $nome == null){
    echo"<script language='javascript' type='text/javascript'>
    alert('O campo nome deve ser preenchido');window.location.href='
    cadastro.html';</script>";

    }else{
      if($logarray == $nome){
 
        echo"<script language='javascript' type='text/javascript'>
        alert('Esse nome já existe');window.location.href='
        cadastro.html';</script>";
        die();
 
      }else{
        $query = "INSERT INTO usuario(nome,senha) VALUES ('$nome','$senha')";
        $insert = mysqli_query($connect, $query);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='index1.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='cadastro.html'</script>";
        }
      }
    }
    exit;
?>
