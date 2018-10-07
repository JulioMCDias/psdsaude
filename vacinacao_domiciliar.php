<?php
require 'config.php'; 
require 'classes/vacinacao_domiciliar.class.php';
    $vd = new Domiciliar();
    if (isset($_POST['nome_responsavel']) && !empty($_POST['nome_responsavel'])) {
        $nome_responsavel = addslashes($_POST['nome_responsavel']);
        $pessoa_vacinada = addslashes($_POST['pessoa_vacinada']);
        $vacinas_solicitadas = addslashes($_POST['vacinas_solicitadas']);
        $email = addslashes($_POST['email']);
        $data = addslashes($_POST['data']);
        $telefone = addslashes($_POST['telefone']);
        $endereco = addslashes($_POST['endereco']);
        $cidade = addslashes($_POST['cidade']);
        $cep = addslashes($_POST['cep']);

        $vd->addVacinaDomiciliar($nome_responsavel, $pessoa_vacinada, $vacinas_solicitadas, $email, $data, $telefone, $endereco, $cidade, $cep);
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
                    <h1>Vacinação</h1>

                    <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="vacinacao.php">Vacinação</a></li>
                            <li>Vacinação Domiciliar</li>
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
                    <h2>Vacinação - Domiciliar</h2>
                    
                    <p>Agende sua vacinação em casa: escolha qual a vacina, dia, horário e forma de pagamento. 
                        Esse serviço deve ser agendado previamente e funciona de segunda à sexta, das 9h Às 17h.
                        <br><strong>Conte com a excelência da PSDSaúde em sua residência!</strong>
                    </p>
                    
                    <br><h5><strong>Dúvidas Frequentes</strong></h5><br>

                    <label><strong>Quais dias e horários?</strong></label>
                    <p>Diás úteis em horário comercial.</p>

                    <label><strong>Como faço para agendar?</strong></label>
                    <p>Preenchendo nosso formulário de pré-agendamento ao lado.</p>

                    <label><strong>Com qual antecedência eu posso solicitar a visita?</strong></label>
                    <p>Pedimos 2 dias de antecedência no mínimo, para que nossa equipe possa entrar em contato e confirmar a aplicação.</p>

                    <label><strong>Como será confirmada a visita?</strong></label>
                    <p>Após receber a sua solicitação a nossa equipe entrará em contato por telefone para confirmar o agendamento.</p>
                        
                    <br><br>

                    <h4><strong>Formulário de Solicitação</strong></h4><br>
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome_responsavel">Nome do responsável</label><span class="frm_required">*</span>
                                <input type="text" name="nome_responsavel" class="form-control" required>
                                <p>Seu nome</p>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="nome_pessoa_vacinada">Nome da pessoa a ser vacinada</label></span>
                                <input type="text" name="pessoa_vacinada" class="form-control">
                                <p>Caso a pessoa não seja você</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vacina_solicitada">Quais as vacinas solicitadas?</label><span class="frm_required">*</span>
                            <input type="text" name="vacinas_solicitadas" class="form-control" required>
                            <p>Na dúvida, consulte seu médico sobre a melhor prescrição.</p>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">E-mail</label><span class="frm_required">*</span>
                                <input type="email" name="email" class="form-control" required placeholder="exemplo@email.com">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="data">Data</label><span class="frm_required">*</span>
                                <input type="date" name="data" class="form-control" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="telefone">Telefone</label><span class="frm_required">*</span>
                                <input type="text" id="telefone" name="telefone" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço</label><span class="frm_required">*</span>
                            <input type="text" name="endereco" class="form-control" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cidade">Cidade</label><span class="frm_required">*</span>
                                <input type="text" name="cidade" class="form-control" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cep">CEP</label><span class="frm_required">*</span>
                                <input type="text" id="cep" name="cep" class="form-control" required>
                                <p>Para facilitar a localização</p>
                            </div>
                        </div>
                        <p>Obs.: Campos com <span class="frm_required">*</span> são obrigatórios!</p>                                
                        <button type="submit" class="button dark">Enviar</button>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>