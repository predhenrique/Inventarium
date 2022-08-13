<?php
    include("conexao.php");
    include("verificar-session.php");

    try{
        $stmt = $pdo->prepare("select * from tbCategoria");
        $stmt->execute();

        $arrayCategoria = array();

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $arrayCategoria[] = ;
        }

    }catch(PDOException $e){
        echo "Erro: " . $e->getMessage();
    }
?>