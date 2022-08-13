<?php
    $nome = $_POST['txNome'];
    $telefone = $_POST['txTelefone'];
    $login = $_POST['txLogin'];
    $senhaLogin = $_POST['txSenha'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into usuarios values(null,'$nome','$telefone','$login','$senhaLogin')");	
	$stmt ->execute();       

    header("location:produto.php");
?>