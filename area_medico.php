<?php require 'config.php';?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'pages/header.php'; ?>
<body class="single-page">
    <header class="site-header">
        <?php require 'pages/menu.php'; ?>        
        <?php if (empty($_SESSION['login'])): ?>
            <script> window.location.href="login.php"; </script>
        <?php exit; ?>
        <?php elseif($info_tipo['tipo'] == 'paciente'): ?>
            <script> window.location.href="index.php"; </script>
        <?php endif; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Área do Médico</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Área do Médico</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/elements-bg.png" alt="">
    </header><!-- .site-header -->
    
    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Escolha um Tipo de Cadastro</h2>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="row">
                                                    
                            <div class="card-deck">
                                <div class="col-sm-6">
                                    <div class="card text-center bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title">Cadastro de Pacientes</h5>
                                            <p class="card-text">Adicionar novos pacientes e/ou gerenciar pacientes já existentes.</p>
                                            <a href="#" class="button gradient-bg">Acessar</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card text-center bg-light">
                                      <div class="card-body">
                                            <h5 class="card-title">Cadastro de Vacinas</h5>
                                            <p class="card-text">Adicionar novas vacinas e/ou gerenciar vacinas já existentes.</p>
                                            <a href="#" class="button gradient-bg">Acessar</a>
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