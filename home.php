<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Perfil </title>
</head>
<body>
  <?php
  require_once 'helpers/init_session.php';
  
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
      <div class="col-md-8 col-xs-4">
        <div class="jumbotron">
          <h1 class="display-5"><?php echo $logado; ?></h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        1 Of 3
      </div>
      <div class="col">2 Of 3</div>
      <div class="col">3 Of 3</div>
    </div>
  </div>

</body>
<footer>
  <script src="./node_modules/jquery/dist/jquery.min.js" ></script>
  <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</footer>
</html>