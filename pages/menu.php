<div class="nav-bar">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                <div class="site-branding d-flex align-items-center">
                 <a class="d-block" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
             </div><!-- .site-branding -->

                <?php require 'classes/usuarios.class.php';
                    $u = new Usuarios();
                    $info_logado = $u->usuarioLogado();
                    $info_tipo = $u->verificarAcesso();
                ?> 

                <nav class="site-navigation d-flex justify-content-end align-items-center">
                <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                    <li><a href="index.php">Home</a></li>
                    
                    <?php if($info_tipo['tipo'] == 'paciente' || $info_tipo['tipo'] == ''): ?>
                        <li><a href="vacinacao.php">Vacinação</a></li>                                                
                    <?php elseif($info_tipo['tipo'] == 'atendente'): ?>
                        <li><a href="area_atendente.php">Área do Atendente</a></li>    
                    <?php else: ?>
                        <li><a href="area_medico.php">Área do Médico</a></li>    
                    <?php endif; ?> 

                    <li><a href="doencas.php">Doenças</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a href="sobre.php">Sobre Nós</a></li>                   
                                        
                    <?php if(isset($_SESSION['login']) && !empty($_SESSION['login'])): ?>
                        <li class="call-btn button gradient-bg mt-3 mt-md-0 d-flex justify-content-center align-items-center">
                            <i class="fa fa-user-circle">&nbsp&nbsp</i>
                            <?php echo $info_logado['nome']." &nbsp&nbsp|&nbsp "."<a href='sair.php'>&nbsp&nbspSair&nbsp&nbsp<i class='fa fa-sign-out-alt'>&nbsp&nbsp</i></a>"; ?>                            
                        </li>                            
                    <?php else: ?>                    
                        <li class="call-btn button gradient-bg mt-3 mt-md-0">
                            <a class="d-flex justify-content-center align-items-center" href="login.php">
                                Login&nbsp&nbsp<i class="fa fa-sign-in-alt"></i></a>                            
                        </li>
                    <?php endif; ?>                
                    
                </ul>
            </nav><!-- .site-navigation -->

            <div class="hamburger-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div><!-- .hamburger-menu -->
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->
        </div><!-- .nav-bar -->