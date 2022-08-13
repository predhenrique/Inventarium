<?php  
    $produto = $_POST['txProduto'];
    $idCategoria = $_POST['txIdCategoria'];
    $fornecedor = $_POST['txFornecedor'];
    $valor = $_POST['txValor'];

    //echo "$produto $idCategoria $valor";
    //insert into tbproduto values(null,'testeProduto',1,1)
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbproduto 
    values(null,'$produto',$idCategoria,'$fornecedor',$valor)");	
	$stmt ->execute();    

    header("location:estoque.php");
    
?>