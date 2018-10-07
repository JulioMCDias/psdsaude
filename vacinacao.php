<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'pages/header.php'; ?>
<body class="single-page">
    <header class="site-header">
        <?php require 'pages/menu.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Vacinação</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Vacinação</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/service-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Escolha um Tipo de Serviço</h2>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="row">
                                                    
                            <div class="card-deck">
                                <div class="col-sm-6">
                                    <div class="card text-center bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">Vacinação Domiciliar</h5>
                                            <p class="card-text">O atendimento domiciliar é mais um diferencial que a PSDSaúde oferece, proporcionando comodidade e conforto aos seus clientes. Contamos com uma equipe técnica qualificada e treinada especialmente para transportar e aplicar vacinas com segurança em domicílio.</p>
                                            <a href="vacinacao_domiciliar.php" class="button gradient-bg">Agendar</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card text-center bg-light">
                                      <div class="card-body">
                                            <h5 class="card-title">Vacinação Empresarial</h5>
                                            <p class="card-text">A PSDSaúde desenvolveu um programa especial de vacinação que atende especificamente as necessidades dos funcionários de sua organização, ou seja, um programa customizado de vacinação. Buscamos sempre economia para a empresa, comodidade para os funcionários e melhoria na qualidade de vida no ambiente de trabalho!</p>
                                            <a href="vacinacao_empresarial.php" class="button gradient-bg">Agendar</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- card deck -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>