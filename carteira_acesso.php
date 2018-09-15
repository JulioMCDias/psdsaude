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
                    <h1>Carteira de <br> Vacinação</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Carteira de Vacinação</li>
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
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="row">
                                                    
                            <form action="#" method="POST">
                            <div class="card-deck d-flex justify-content-center align-items-center">
                                <div class="card text-center">
                                    <div class="card-header">
                                        <h5 class="card-title">Carteira Online - Acesso</h5>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="form-group">
                                            <label for="">Nome:</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Data de Nascimento:</label>                                       
                                            <input type="date" name="data_nasc" class="form-control">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Consultar</button>
                                    </div>
                                </div>
                            </div> <!-- card deck -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>