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
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">Formulário</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" target="_blank" href="https://app.powerbi.com/reportEmbed?reportId=1e0850a8-a9f0-47e0-a542-3b45b0bb023d&autoAuth=true&ctid=9ce10668-a4c0-4d09-9d62-91d64618aecd">Estatísticas</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

        <article class="container-fluid d-flex justify-content-center align-items-center text-center" style="   min-height: 65vh;">
            <div class="w-100">
            <h2 class="title">Ainda faltam:</h2>

            <section class="row justify-content-center align-items-center flexiona">
                <div class="relogio col-md-3 txt">
                    <script>
                        const url = 'http://10.125.121.135:8081/CI4/public/valor';

                        // Fazendo a requisição GET
                        function buscarQuantidade() {
                            fetch(url)
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error('Erro na requisição: ' + response.status);
                                    }
                                    return response.json(); // Converte a resposta para JSON
                                })
                                .then(data => {
                                    console.log('Dados recebidos:', data); // Exibe no console
                                    document.getElementById('quantidade').innerText = data.valor; // Mostra na tela
                                })
                                .catch(error => {
                                    console.error('Erro ao buscar os dados:', error);
                                });
                        }


                        // Chama a função imediatamente ao carregar a página
                        buscarQuantidade();

                        // Atualiza a cada 3 segundos (3000 milissegundos)
                        setInterval(buscarQuantidade, 1000);




                        function atualizarRelogio() {
                            var agora = new Date();
                            var horas = String(agora.getHours()).padStart(2, '0');
                            var minutos = String(agora.getMinutes()).padStart(2, '0');
                            var segundos = String(agora.getSeconds()).padStart(2, '0');
                            var hhmmss = horas + ':' + minutos + ':' + segundos;

                            document.querySelector('.relogio').textContent = hhmmss;

                            var refeicao = '';
                            var cafeManha = '07:00:00';
                            var almoco = '12:00:00';
                            var cafeTarde = '16:30:00';
                            var jantar = '19:00:00';

                            if (hhmmss < cafeManha) {
                                refeicao = 'Antes do Café da Manhã';
                            } else if (hhmmss < almoco) {
                                refeicao = 'Café da Manhã';
                            } else if (hhmmss < cafeTarde) {
                                refeicao = 'Almoço';
                            } else if (hhmmss < jantar) {
                                refeicao = 'Café da Tarde';
                            } else {
                                refeicao = 'Jantar';
                            }

                            // Atualiza os elementos HTML com a refeição atual
                            document.getElementById('refeicaoAtual').textContent = refeicao;
                            document.getElementById('refeicaoTexto').textContent = refeicao;
                        }

                        setInterval(atualizarRelogio, 1000);
                    </script>
                </div>


                <div class="col-md-3 color3 circulo">
                    <h1 class="contagem"><span id="quantidade"></span></h1>
                    <h3 class="meio">Hóspedes para<br>
                        <span id="refeicaoAtual"></span>
                    </h3>
                </div>

                <p class="col-md-3 txt">
                    <span id="refeicaoTexto"></span>
                </p>

            </section>
            </div>
        </article>

    <footer class="color2 container-fluid">
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