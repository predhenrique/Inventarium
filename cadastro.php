<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
            crossorigin="anonymous">

        <link rel="stylesheet" href="style/style.css">
    </head>

    <?php 
		include("conexao.php");

		echo "<h1> CADASTRAR </h1>";
	?>

    <body>
        <form action="login-inserir" method="post">


        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nome</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="txNome">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefone</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="txTelefone">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="txLogin">
                <div id="emailHelp" class="form-text">Seu email não será compartilhado com ninguém.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    name="txSenha">
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>

        <?php


?>

        </form>
    </body>
</html>