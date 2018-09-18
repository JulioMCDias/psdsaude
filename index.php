<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require 'pages/header.php'; ?>
<body>
    <header class="site-header">
        <?php require 'pages/menu.php';?>
        <div class="swiper-container hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero1.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Os Melhores <br>Serviços de Vacinação</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Visite ou agende sua vacinação na clínica!</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <!-- <a href="#" class="button gradient-bg">Saiba mais</a> -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero2.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Vacinação <br>Domiciliar</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Agende uma vacinação domiciliar!</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <!-- <a href="#" class="button gradient-bg">Saiba mais</a> -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->

                <div class="swiper-slide hero-content-wrap" style="background-image: url('images/hero3.jpg')">
                    <div class="hero-content-overlay position-absolute w-100 h-100">
                        <div class="container h-100">
                            <div class="row h-100">
                                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-start">
                                    <header class="entry-header">
                                        <h1>Proteja-se <br>da Gripe</h1>
                                    </header><!-- .entry-header -->

                                    <div class="entry-content mt-4">
                                        <p>Viaje tranquilo e seguro.</p>
                                    </div><!-- .entry-content -->

                                    <footer class="entry-footer d-flex flex-wrap align-items-center mt-4">
                                        <!-- <a href="#" class="button gradient-bg">Saiba mais</a> -->
                                    </footer><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .hero-content-overlay -->
                </div><!-- .hero-content-wrap -->
            </div><!-- .swiper-wrapper -->

            <div class="pagination-wrap position-absolute w-100">
                <div class="swiper-pagination d-flex flex-row flex-md-column"></div>
            </div><!-- .pagination-wrap -->
        </div><!-- .hero-slider -->
    </header><!-- .site-header -->

    <div class="homepage-boxes">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Carteira Online</h2>
                        <p>Verifique se sua carteira de vacinação está atualizada!</p>
                        <a href="carteira_acesso.php" class="button gradient-bg">Acessar</a>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 mt-5 mt-lg-0">
                    <div class="opening-hours">
                        <h2 class="d-flex align-items-center">Faça um Agendamento</h2>
                        <p>Agende sua vacinação em casa: escolha qual a vacina, dia, horário e forma de pagamento.</p>
                        <a href="vacinacao.php" class="button dark">Agende</a>                     
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="emergency-box">
                        <h2 class="d-flex align-items-center">Pacientes Alérgicos</h2>
                        <p>O tratamento de doenças alérgicas baseia-se em evitar o alérgico, farmacoterapia, imunoterapia e educação do paciente.</p><br>
                        <a href="alergicos.php" class="button">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="our-departments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="our-departments-wrap">
                        <h2>Alguns Tipos de Doenças</h2>

                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Dengue</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>A dengue é uma doença febril aguda ou febre hemorrágica por dengue e pode ser causada por 1 dos 4 tipos conhecidos de sorotipos DEN-1, DEN-2, DEN-3 e DEN-4, do gênero flavivirus.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Febre Amarela</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>É uma doença viral, flavivirus, que é transmitida para pessoas através da mordida de mosquitos infectados. Se manifesta desde uma febre auto limitada até uma hepatite grave e febre hemorrágica.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Gripe</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>É causada pelo vírus Influenza, o qual infecta o trato respiratório (nariz, garganta e pulmões).</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Febre Tifóide</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>É uma doença bacteriana aguda causada pela bactéria Salmonella Typhi.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Doenças Pneumocócicas</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Doenças pneumocócicas são aquelas causadas pela bactéria Streptococcus pneumoniae, responsável por doenças pneumocócicas invasivas (pneumonias bacterêmicas, meningite, sepse e artrite) e não-invasivas (sinusite, otite média aguda, conjuntivite, bronquite e pneumonia).</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Rubeola</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>É uma doença viral, caracterizada por febre leve, exantema e glândulas inchadas.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Sarampo</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>Sarampo é uma doença viral altamente contagiosa, aguda e capaz de produzir epidemias, que causa febre alta, tosse e manchas pelo corpo todo.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Raiva</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>A raiva é uma zoonose viral, que se caracteriza como uma encefalite progressiva aguda e letal.</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>

                            <div class="col-12 col-md-6 col-lg-4 mb-0">
                                <div class="our-departments-cont">
                                    <header class="entry-header d-flex flex-wrap align-items-center">
                                        <h3>Cólera</h3>
                                    </header>

                                    <div class="entry-content">
                                        <p>É uma doença infecciosa causada pelo Vibrio Cholerae, reconhecida como das mais fatais com taxa de mortalidade de 45 a 50%,</p>
                                    </div>

                                    <footer class="entry-footer">
                                        <a href="doencas.php">Saiba mais</a>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="the-news">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Notícias</h2>

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-1.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>II Congresso de Clínicas de Vacinas</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Data: </label><a href="#"> 25 de Março de 2018</a></div>

                                        <div class="posted-by"><label>Por: </label><a href="#"> PSDSaúde</a></div>

                                        <div class="post-comments"><a href="#"> 0 Comentários</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Participamos do II Congresso de Clínicas de Vacinas. Confira como foi a Programação:   Agenda 9/03 (Sexta-feira) 8hs: Abertura (Geraldo Barbosa – Presidente ABCVAC 8:15h: Gestão Tributária e Comercial direcionadas a clínicas de vacinação Nelson Bruxellas Beltrame: Professor da FIA, FIPECAF e FGV; Especialista em Custos, formação de preços, eng. Tributária e Logística integrada 9:30h: Inovação: Como […]</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-2.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Aplicação de Brinquinhos em Bebês</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Data: </label><a href="#"> 04 Fevereiro de 2018</a></div>

                                        <div class="posted-by"><label>Por: </label><a href="#"> PSDSaúde</a></div>

                                        <div class="post-comments"><a href="#"> 0 Comentários</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>O primeiro brinquinho dos bebês merece ser feito com todo cuidado! Por isso usamos o SYSTEM 75, que é o sistema de aplicação mais moderno do mundo: a colocação é precisa e os brincos são mais fininhos e delicados, embalados e esterilizados individualmente em cápsulas descartáveis. Sua aplicação é mais rápida, higiênica (sem contato manual) […]</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="the-news-wrap">
                                <figure class="post-thumbnail">
                                    <a href="#"><img src="images/news-3.jpg" alt=""></a>
                                </figure>

                                <header class="entry-header">
                                    <h3>Viaje Protegido!</h3>

                                    <div class="post-metas d-flex flex-wrap align-items-center">
                                        <div class="posted-date"><label>Data: </label><a href="#"> 20 de Janeiro de 2018</a></div>

                                        <div class="posted-by"><label>Por: </label><a href="#"> PSDSaúde</a></div>

                                        <div class="post-comments"><a href="#"> 0 Comentários</a></div>
                                    </div>
                                </header>

                                <div class="entry-content">
                                    <p>Saiba quais vacinas devem ser tomadas antes de viajar e fique protegido aonde quer que esteja!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>