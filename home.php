<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" >
  <link rel="stylesheet" href="css/style.css">
  <title>Perfil </title>
</head>
<body>
  <?php
  require_once 'db/Db_Conn.php';
  require_once 'helpers/init_session.php';
  require_once 'db/DbFunc.php';
  
  $email = $_SESSION['email'];
  $senha = $_SESSION['senha'];

  $resultado_sing = DbFunc::procurar_usuario('cantor',$email,$senha,$conexao);
  $resultado_mus = DbFunc::procurar_usuario('musico',$email,$senha,$conexao);

  $cpf = "";
  $tabela = "";
  if(mysqli_num_rows($resultado_mus) > 0){
    $resultado_mus = mysqli_fetch_array($resultado_mus);
    $tabela = "musico";
    $nome = $resultado_mus['user_nome'];
    $cpf = $resultado_mus['user_CPF'];
  }else if(mysqli_num_rows($resultado_sing) > 0){
    $resultado_sing = mysqli_fetch_array($resultado_sing);
    $tabela = "cantor";
    $nome = $resultado_sing['user_nome'];
    $cpf = $resultado_sing['user_CPF'];
  }

  ?>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">PHP Music</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contatos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sugestões</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Configurações</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-1" action="search.php" method="POST">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <div class="buttons">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <a  href="logout.php" class="btn btn-outline-danger my-2 my-sm-0 ">Sair</a>
          </div>
        </form>
      </div>   
    </nav>
  </header>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-xs-12">
        <div class="container jumbotron ">
          <h3 class="text-center container-title"><?php echo $email; ?></h3>
          <p class="text-center"><?php echo $nome; ?></p>
          <hr class="my-4">
          <div class="buttons">
            <a href="alterar_usuario.php?cpf=<?php echo $cpf; ?>&funcao=<?php echo $tabela ?>" class="btn btn-primary btn-lg">Alterar</a>
            <a href="#" class="btn btn-primary btn-lg">Melhorar o perfil</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xs-12">
        <div class="container jumbotron ">
          <h3 class="text-center container-title"><?php echo $email; ?></h3>
          <p class="text-center"><?php echo $cpf; ?></p>
          <hr class="my-4">
          <div class="buttons">
            <a href="remover.php?cpf=<?php echo $cpf; ?>&tabela=<?php echo $tabela; ?>" class="btn btn-danger btn-lg">Remover Conta</a>
            <a href="teste.php?" class="btn btn-success btn-lg">Ver Estatísticas</a>
          </div>
        </div>
      </div>

      
    </div>
  </div>

</body>
<footer>
  <script src="./node_modules/jquery/dist/jquery.min.js" ></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>