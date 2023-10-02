<?php 
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" 
        href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html"> 
                    <img src="img/ti4.png" alt="ti tekna" width="55px">TI Tekna
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links"
                aria-controls="navbar-links" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html#home">Home</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.html#quemsomos">Quem somos</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html#parceiros">Parceiros</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link " href="index.html#servicos">Serviços</a>
                            </li>
                        </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="contato.php"><button>Contato</button></a>
                        </li>
                    </ul>
                </div>
    </nav>
</header>

<main>
    <section class="container-fluid text-center" id="section_contato">
        <div class="container text-center" id="div_contato">
        <h2>Faça um orçamento gratuito</h2>
        <h2>(99) 99999-9999</h2>
        </div>
    </section>

    <section class="container-fluid " id="section_form">
        <form class="container" action="" method="post" id="id_form">
            <h3 class="text-center my-5">Envie-nos uma mensagem</h3>
            <div class="my-3">
                <label class="form-label" for="nome"></label>
                <input class="form-control text-muted"type="text" placeholder="Seu nome">
                
            </div>

            <div class="my-3">
            <div class="text-muted">
                <label class="form-label" for="email"></label>
                <input class="form-control" type="email" placeholder="Seu E-mail">
                EX: maria@gmail.com
            </div>

            <div class="row my-3">
                <div class="col text-muted">
                    <label class="form-label" for="tel"></label>
                    <input class="form-control" type="tel" placeholder="(99) 9999-9999">
                    Telefone
                </div>
                <div class="col text-muted">
                    <label class="form-label" for="tel"></label>
                    <input class="form-control" type="tel" placeholder="(99) 9 9999-9999">
                    Celular
                </div>
            </div>

            <div class="my-3">
                <label class="form-label" for="textarea">Sua mensagem:</label>
                <textarea class="form-control" name="mensagem" id="textarea" cols="30" rows="10"></textarea>
            </div>

            <div class="my-3 text-center">
                <input class="btn btn-primary" type="submit" value="Enviar">
            </div>


        </form>
    </section>

</main>

<footer class="container-fluid bg-footer ">
    <p id="p_footer">Desenvolvido por Jeff Pereira</p>
</footer>
</body>
</html>