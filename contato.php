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
                    <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=university of san francisco&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div><!-- map -->
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>