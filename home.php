<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
  <title>Perfil </title>
</head>
<body>
  <?php
  session_start();
  if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
  }
  
  $logado = $_SESSION['email'];
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
        <form class="form-inline my-2 my-lg-1">
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
      <div class="col">
        <div class="container">
          <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-title">
              <h5 class="card-title"><?php echo $logado ?></h5>
              <p class="card-title"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="container jumbotron"></div>
      </div>
    </div>
  </div>

</body>
<footer>
  <script src="./node_modules/jquery/dist/jquery.min.js" ></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>