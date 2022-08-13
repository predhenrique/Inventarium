<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tela de login</title>
                <!-- Font Awesome -->
                <link
                href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
                rel="stylesheet"
                />
                <!-- Google Fonts -->
                <link
                href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
                rel="stylesheet"
                />
                <!-- MDB -->
                <link
                href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
                rel="stylesheet"
                />
    </head>
        <body>
        <form action="verificar-login.php" method="post">
        <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Por favor, entre com usuário e senha</p>

              <div class="form-outline form-white mb-4">
                <input type="text" name="txLogin" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX">Usuário</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="txPass" class="form-control form-control-lg" />
                <label class="form-label" for="typePasswordX">Senha</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Esqueceu a senha?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Entrar</button>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Não tem conta? <a href="cadastro.php" class="text-white-50 fw-bold">Cadastre-se</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</form>  
        </body>
</html>