<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOLBOOK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<!-- cabeçalho -->
<nav class="navbar navbar-expand-md bg-black navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">LOLBOOK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-0"
                       type="search" placeholder="Digite um Personagem" aria-label="Search">
                <button class="btn btn-outline-light rounded-0" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>

<!--  -->

<?php exit();?>
<div class="container">
<div class=" row">
    <?php foreach ($personagens as $value): ?>
        <div class="card col-6" style="width: 18rem;">
            <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?= $value ?>_0.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?= $value ?> </h5>
                <p class="card-text">Rota:</p>
                <p class="card-text">Função:</p>
                <a href="#" class="btn btn-primary">Ver mais detalhes</a>
            </div>
        </div>
    <?php endforeach;?>
</div>
</div>
</body>
</html>