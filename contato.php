<?php
require 'config.php';
require 'classes/msgContato.class.php';
    $msg = new msgContato();
    if (isset($_POST['nome']) && !empty($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $assunto = addslashes($_POST['assunto']);
        $mensagem = addslashes($_POST['mensagem']);
        
        $msg->enviarMsg($nome, $email, $assunto, $mensagem);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'pages/header.php'; ?>
<body class="single-page">
    <header class="site-header">
        <?php require 'pages/menu.php'; ?>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contato</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Contato</li>
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <img class="header-img" src="images/contact-bg.png" alt="">
    </header><!-- .site-header -->

    <div class="contact-page-short-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="contact-info h-100">
                        <h2 class="d-flex align-items-center">Informações de Contato</h2>

                        <ul class="p-0 m-0">
                            <li><span>Endereço:</span> R. Amador Bueno, 389/491 - São Paulo - SP</li>
                            <li><span>Telefone:</span> +53 345 7953 32453</li>
                            <li><span>E-mail:</span>psdsaude@email.com</li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="opening-hours h-100">
                        <h2 class="d-flex align-items-center">Horário de Funcionamento</h2>

                        <ul class="p-0 m-0">
                            <li>Segunda - Quinta <span>8:00 - 19:00</span></li>
                            <li>Sexta <span>8:00 - 18:30</span></li>
                            <li>Sábado <span>9:30 - 17:00</span></li>
                            <li>Domingo <span>9:30 - 15:00</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col-12 col-md-4 mt-5 mt-lg-0">
                    <div class="emergency-box h-100">
                        <h2 class="d-flex align-items-center">Emergência</h2>

                        <div class="call-btn text-center">
                            <a class="d-flex justify-content-center align-items-center button gradient-bg" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                        </div>

                        <p>Em casos de emergencia, utilize do número indicado para pronto atendimento.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Entre em Contato</h2>
                </div>
                <form class="form-row col-12" method="POST">
                    <div class="col-12 col-md-4">
                        <input type="text" name="nome" placeholder="Nome" required>
                    </div><!-- col-4 -->

                    <div class="col-12 col-md-4">
                        <input type="email" name="email" placeholder="E-mail" required>
                    </div><!-- col-6 -->

                    <div class="col-12 col-md-4">
                        <input type="text" name="assunto" placeholder="Assunto" required>
                    </div>

                    <div class="col-12">
                        <textarea name="mensagem" rows="12" cols="80" placeholder="Mensagem..." required></textarea>
                    </div>

                    <div class="col-12">
                        <input type="submit" value="Enviar Mensagem" class="button gradient-bg">
                    </div>
                </form>
            </div><!-- row -->
        </div>
    </div><!-- contact-form -->

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="contact-page-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.6638622301105!2d-46.712190516312624!3d-23.652507234961522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce51aaf11432ad%3A0x4578b756c7a1a2e7!2sUniversidade+Nove+de+Julho%2C+Unidade+Santo+Amaro!5e0!3m2!1spt-BR!2sbr!4v1537123622548" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div><!-- map -->
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>