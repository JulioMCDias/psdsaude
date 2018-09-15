<?php require 'config.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require 'pages/header.php'; ?>
<body class="single-page blog-page">
    <header class="site-header">
        <?php require 'pages/menu.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Doenças</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Doenças</li>
                        </ul>
                    </div><!-- .breadcrumbs -->
                </div>
            </div>
        </div>

        <img class="header-img" src="images/news-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="quality-services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>Aqui você encontra informações sobre as principais doenças do nosso dia a dia e as vacinas disponíveis para a sua proteção. Fique por dentro e previna-se!</p>
                    <p><strong>Clique em qualquer doença para ter mais informações sobre ela.</strong></p>
                    
                    <div class="w-100 text-center mt-5">                        
                        <ul class="tabs-nav d-flex flex-wrap">                        
                            <?php
                                require 'classes/doencas.class.php';
                                $doenca = new Doenca();

                                $lista = $doenca->getAll();
                                foreach ($lista as $item):
                            ?>                                                                                                         
                                <li class="tab-nav d-flex justify-content-center align-items-center">
                                    <a href="doenca_detalhes.php?id_doenca=<?php echo $item['id_doenca']?>"><?php echo $item['nome_doenca']; ?></a>                            
                                </li>
                            <?php
                                endforeach;
                            ?>                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>