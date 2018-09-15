<?php
require 'config.php';
require 'classes/doencas.class.php';
$doenca = new Doenca();

    if (!empty($_GET['id_doenca'])) {
        
        $id_doenca = $_GET['id_doenca'];
        $info = $doenca->getInfo($id_doenca);         

    } else {
        header("Location: doenca.php");
        exit;
    }
?>


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
                            <li><a href="doencas.php">Doenças</a></li>
                            <li><?php echo $info['nome_doenca'];?></li>
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
                    <h2><?php echo $info['nome_doenca'];?></h2>                 
                    <div class="w-100 mt-5">                        
                       <?php echo $info['descricao'];?><br><br>
                       
                       <?php if (!empty($info['vacinas'])): ?>
                            <label for="vacinas"><strong>Vacinas Disponíveis:</strong></label>
                            <p><?php echo str_replace(';', '.<br>', $info['vacinas']);?></p>
                       <?php endif ?>
                        
                       <?php if (!empty($info['contagio'])): ?>
                            <label for="contagio"><strong>Contágio:</strong></label>
                            <p><?php echo $info['contagio'];?></p>
                       <?php endif ?>

                       <?php if (!empty($info['sintomas'])): ?>
                            <label for="sintomas"><strong>Sintomas:</strong></label>
                            <p><?php echo $info['sintomas'];?></p>
                       <?php endif ?>
                        
                        <?php if (!empty($info['tratamento'])): ?>
                            <label for="tratamento"><strong>Tratamento:</strong></label>
                            <p><?php echo $info['tratamento'];?></p>
                        <?php endif ?>

                        <?php if (!empty($info['prevencao'])): ?>
                            <label for="prevencao"><strong>Prevenção:</strong></label>
                            <p><?php echo $info['prevencao'];?></p>
                        <?php endif ?>

                        <?php if (!empty($info['grupo_risco'])): ?>
                            <label for="grupo_risco"><strong>Grupos de Risco:</strong></label>
                            <p><?php echo $info['grupo_risco'];?></p>
                        <?php endif ?>

                        <?php if (!empty($info['duvidas'])): ?>
                            <label for="duvidas"><strong>Dúvidas:</strong></label>
                            <p><?php echo $info['duvidas'];?></p>
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>