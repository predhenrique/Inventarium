<?php
    session_start();

    if(isset($_POST['acao'])){
        //Recupero o valor do input
        $tarefa = strip_tags($_POST['tarefa']);

        //Verificar se existe seção tarefas.
        if(!isset($_SESSION['tarefa'])){
            $_SESSION['tarefa'] = array();
            $_SESSION['tarefa'][] = $tarefa;
        }else{
            $_SESSION['tarefa'][] = $tarefa;
        }

        echo '<script>alert("Tarefa foi adicionada!");</script>';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tarefas</title>
    <style type="text/css">
        *{
            <?php
                echo 'margin:0;padding:0;box-sizing: border-box;';
            ?>
        }
        form{
            max-width:600px;
            margin:10px auto;
            display: block;
        }
        input[type=text]{
            width:100%;
            height:40px;
            border: 1px solid #ccc;
        }
        input[type=submit]{
            width:100%;
            height:40px;
            background-color: #069;
            color:white;
            font-size:17px;
        }
        h3{
            text-align:center;
        }

        </style>
</head>
<body>
    <form method="post">
        <input type="text" name="tarefa" placeholder="Digite sua tarefa...">
        <input type="submit" name="acao" value="enviar!">
    </form>
    <br />
    <h3>Suas tarefas atuais:</h3>

    <?php
        foreach ($_SESSION['tarefa'] as $key => $value) {
           echo '<p>Tarefa #'.$key.' '.$value.'</p>';
        }
    ?>
</body>
</html>