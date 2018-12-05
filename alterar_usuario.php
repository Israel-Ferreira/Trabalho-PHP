<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Alterar</title>
</head>
<body>
    <?php 
    require_once "db/Db_Conn.php";
    require_once "helpers/init_session.php";
    require_once "db/DbFunc.php";

    $cpf = $_GET['cpf'];
    $tabela = $_GET['funcao'];

    $reslt = DbFunc::informacoes_cpf($conexao, $tabela, $cpf);


    $dados = mysqli_fetch_array($reslt);

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
    <div class="container form-container">
        <h2>Dados Pessoais</h2>
        <form action="alterar.php" name="formsign" method="POST" id="updateForm">
            <div class="form-group">
                <label for="signUpPassword">Email: </label>
                <input type="text" class="form-control" name="cpf" id="updateEmail" placeholder="Funcao" value="<?php echo $cpf ?>" readonly>
            </div>
            <div class="form-group">
                <label for="signUpPassword">Funcao: </label>
                <input type="text" class="form-control" name="funcao" id="updateEmail" placeholder="Funcao" value="<?php echo $tabela; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="signUpName">Nome: </label>
                <input type="text" name="user_nome" class="form-control" id="updateName" placeholder="Digite o seu nome aqui" value="<?php echo $dados['user_nome'];?>" required>
            </div>
            <div class="form-group">
                <label for="updatePassword">Senha: </label>
                <input type="text" class="form-control" name="senha" id="updatePassword" placeholder="Senha" value="<?php echo $dados['senha']; ?>" required>
            </div>
            <a href="home.php" class="btn btn-danger">Cancelar</a>
            <button type="submit" id="signup-button" class="btn btn-success">Atualizar</button>
        </form>
    </div>
</body>
<footer>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
</footer>
</html>