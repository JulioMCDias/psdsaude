<footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><img src="images/logo.png" alt=""></h2>

                            <p>Somos uma clínica que oferece serviços de vacinação para a prevenção, promoção da saúde e bem-estar.
                            Contamos com uma equipe completa e capacitada, além de vacinas de alta qualidade, oferecendo todo suporte, 
                            conforto e segurança que você e sua família precisam!</p>

                            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contato</h2>

                            <ul class="p-0 m-0">
                                <li><span>Endereço:</span> R. Amador Bueno, 389/491 - São Paulo - SP</li>
                                <li><span>Telefone:</span> +53 345 7953 32453</li>
                                <li><span>E-mail:</span> psdsaude@email.com.br</li>
                            </ul>
                        </div>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Links Úteis</h2>
                            <ul class="p-0 m-0">
                                <li><a href="sobre.php">Sobre Nós</a></li>
                                <li><a href="contato.php">Contato</a></li>
                                <li><a href="doencas.php">Doenças</a></li>
                                <?php if($info_tipo['tipo'] == 'paciente' || $info_tipo['tipo'] == ''): ?>
                                    <li><a href="vacinacao.php">Vacinação</a></li>                                                
                                <?php elseif($info_tipo['tipo'] == 'atendente'): ?>
                                    <li><a href="area_atendente.php">Área do Atendente</a></li>    
                                <?php else: ?>
                                    <li><a href="area_medico.php">Área do Médico</a></li>    
                                <?php endif; ?> 
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery-3.3.1.min.js'></script>
    <script type='text/javascript' src='js/jquery.mask.js'></script>
    <script type='text/javascript' src='js/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>