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
                    <h1>Pacientes</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li>Pacientes</li>
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
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="row col-12">
                            
                            <div class="form-group">
                                <a class="btn btn-outline-secondary modal_ajax" href="pages/pacientes/adicionar_paciente.php">
                                    <i class="fa fa-plus">&nbsp</i><strong>Adicionar Paciente</strong>
                                </a>
                            </div>
                            <table class="table table-bordered table-striped table-hover table-sm table-responsive-sm text-center">
                            <thead class="text-white" style="background-color: #248bc1;">
                                <tr>                                    
                                    <th>NOME</th>
                                    <th>IDADE</th>
                                    <th>N° DA CARTEIRA</th>
                                    <th>DATA DE NASCIMENTO</th>
                                    <th>AÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    require 'classes/pacientes.class.php';
                                    $paciente = new Pacientes();
                                ?>
                                <?php
                                    $lista = $paciente->getAllPacientes();
                                    foreach ($lista as $item):
                                ?>      
                                    <tr>                                        
                                        <td><?php echo $item['nome_paciente'].focus(); ?></td>
                                        <td><?php echo $item['idade']; ?></td>                                        
                                        <td><?php echo $item['num_carteira']; ?></td>
                                        <td><?php echo $item['data_nasc']; ?></td>
                                        <td>
                                            <a class="btn btn-outline-info btn-sm modal_ajax" href="pages/pacientes/editar_paciente.php?id_paciente=<?php echo $item['id_paciente']?>">
                                                <i class="fa fa-pencil-alt">&nbsp</i>Editar
                                            </a>                            
                                            <a class="btn btn-outline-danger btn-sm modal_ajax" href="pages/pacientes/excluir_paciente.php?id_paciente=<?php echo $item['id_paciente']?>">
                                                <i class="fa fa-trash-alt">&nbsp</i>Excluir
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                    endforeach;
                                ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
    <!------------------------------------------------ MODAL ---------------------------------------------------------------->
    <div class="modal fade modal text-dark" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" hidden></div>
                <div class="modal-body"></div>
                <div class="modal-footer" hidden></div>
            </div>
        </div>
    </div>
<!---------------------------------------------- FIM MODAL -------------------------------------------------------------->
</body>
</html>