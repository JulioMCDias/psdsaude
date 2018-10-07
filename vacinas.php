<?php require 'config.php'; ?>
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
                    <h1>Vacinas</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Vacinas</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/vacinas-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="row col-12">
                            
                            <form method="POST">
                                <div class="input-group">
                                    <input type="text" name="num_vacina" class="form-control" placeholder="Nº da Carteira">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            
                            ?>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>    
</body>
</html>