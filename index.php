<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title> Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Menu</title>
</head>


<body class="color1">
    <header class="color2 container-fluid">
        <div>
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <img src="images/logo_escrita.png" alt="logotipo com a escrita Muzy Sustentabilidade" class="img-fluid mx-auto" height="100" width="665">
                </div>
                <div class="col-6">
                    <nav class="lista">
                        <ul class="nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Formulário</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Estatísticas</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <article class="container-fluid text-center ">
        <h2 class="title align-self-center">Ainda faltam:</h2>

        <section class="row justify-content-evenly">
            <p class="col align-self-center txt relogio">

                <?php 
                $timezone = new DateTimeZone('America/Sao_Paulo');
                $agora = new DateTime('now', $timezone);
                echo $agora->format('H:i:s');?>
            </p>

            <div class="align-self-start color3 circulo">
                <h1 class="contagem">91</h1>
                <h3 class="meio">Hospedes para<br>Jantar</h3>
            </div>


            <p class="col align-self-center txt">Jantar</p>
        </section>
    </article>


    <footer class="color2">
        <div class="container text-center">
            <div class="row align-items-end">
                <div class="col">
                    <p class="footer-text">&copy;2025 Muzy Sustentabilidade. Promovendo um futuro sustentável. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>