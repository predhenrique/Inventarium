<?php  
    $idCategoria = $_POST['txIdCategoria'];
    $Categoria = $_POST['txCategoria'];
    
    
    //echo "$produto $idCategoria $valor";
    //insert into tbproduto values(null,'testeProduto',1,1)
    
    include("conexao.php");

    $stmt = $pdo->prepare("insert into tbcategoria values(null,'$Categoria')");	
	$stmt ->execute();    

    header("location:categoria.php");
    
?>