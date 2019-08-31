<?php
define('HOST','127.0.0.1');
define('CLIENTE','root');
define('SENHA','');
define('DB','star');

$conexao = mysqli_connect(HOST, CLIENTE, SENHA, DB) or  die ('sem acesso');
?>