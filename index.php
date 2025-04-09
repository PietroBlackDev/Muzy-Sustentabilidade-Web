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

<?php
include 'conexao.php';

$query_coment = "SELECT TotalHospedes FROM estatisticas order by codigo desc limit 1";

$hospedes = mysqli_query($mysqli, $query_coment);

$row = $hospedes->fetch_assoc();
?>

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
            <div class="relogio col align-self-center txt">
                <script>
                    function atualizarRelogio() {
                        var agora = new Date();
                        var horas = String(agora.getHours()).padStart(2, '0');
                        var minutos = String(agora.getMinutes()).padStart(2, '0');
                        var segundos = String(agora.getSeconds()).padStart(2, '0');
                        document.querySelector('.relogio').textContent = horas + ':' + minutos + ':' + segundos;
                    }
                    setInterval(atualizarRelogio, 1000);


                    const data = new Date(); // momento atual 
                    const horas = data.getHours();
                    const minutos = data.getMinutes();
                    const segundos = data.getSeconds();

                    const hhmmmss = [horas, minutos, segundos].join(':');
                    console.log(hhmmmss);

                    var cafeManha = '11:00:00';
                    var almoco = '14:30:00';
                    var cafeTarde = '18:00:00';
                    var jantar = '22:00:00';

                    if (hhmmmss < cafeManha) {
                        refeicao = 'Café da Manhã';
                    } else if (hhmmmss < almoco) {
                        refeicao = 'Almoço';
                    } else if (hhmmmss < cafeTarde) {
                        refeicao = 'Café da Tarde';
                    } else if (hhmmmss < jantar) {
                        refeicao = 'Jantar';
                    }

                </script>
            </div>

            <div class="align-self-start color3 circulo">
                <h1 class="contagem"><?php echo $row["TotalHospedes"]; ?></h1>
                <h3 class="meio">Hospedes para<br><script>document.write(refeicao);</script></h3>
            </div>


            <p class="col align-self-center txt"><script> document.write(refeicao);</script></p>
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