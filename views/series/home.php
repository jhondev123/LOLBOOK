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

<!-- Seção de apresentação  -->

<section class="bg-info d-flex align-items-center justify-content-around">
    <div class="">
        <h1>Eu sou o Jhonattan...</h1>
        <p>Sou desenvolvedor web junior</p>
        </div>
            <img src="img/foto.png" alt="" style="width: 400px; height: 400px">
</section>


<!-- personagens -->
<div class="container row mx-auto g-4 my-4">
    <?php foreach($personagens as $personagen): ?>
        <div class="col-6 col-md-4 col-xxl-3">
            <div class="card ">
                <img src="http://ddragon.leagueoflegends.com/cdn/img/champion/splash/<?= $personagen?>_0.jpg" alt="">
                    <h5 class="card-title text-center"><?=$personagen?></h5>
                <h6 class="card-title text-center"><?= $champsObj->data->$personagen->title?></h6>
                <div class="card-body">
                    <p class="card-text">Funções:
                        <?php foreach($champsObj->data->$personagen->tags as $funcoes): ?>
                        <?="{$funcoes}" ?>
                        <?php endforeach;?>
                    </p>
                    <p class="card-text">Rota: </p>
                    <a href="https://www.leagueoflegends.com/pt-br/champions/<?= $personagen ?>/" class="btn btn-primary">Ver mais detalhes</a>
                </div>
                </div>
            </div>
    <?php endforeach;?>
        </div>
</div>





</body>
</html>