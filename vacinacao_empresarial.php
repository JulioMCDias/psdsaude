<?php
require 'config.php'; 
require 'classes/vacinacao_empresarial.class.php';
    $ve = new Empresarial();
    if (isset($_POST['nome_contato']) && !empty($_POST['nome_contato'])) {
        $nome_contato = addslashes($_POST['nome_contato']);
        $empresa = addslashes($_POST['empresa']);
        $cidade = addslashes($_POST['cidade']);
        $uf = addslashes($_POST['uf']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $vacina_interesse = addslashes($_POST['vacina_interesse']);
        $quantidade = addslashes($_POST['quantidade']);
        $mensagem = addslashes($_POST['mensagem']);

        $ve->addVacinaEmpresarial($nome_contato, $empresa, $cidade, $uf, $email, $telefone, $vacina_interesse, $quantidade, $mensagem);
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
                            <li>Vacinação Empresarial</li>
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
                    <h2>Vacinação - Empresarial</h2>
                    
                    <p><strong>A vacina é o melhor benefício que você pode oferecer ao funcionário de sua empresa e sua família.</strong></p>
                    
                    <p>Aderindo ao programa, entre outras vantagens, um dos grande benefícios comprovado pro pesquisas, é a redução do absenteísmo em torno de 50%, melhorando a produtividade.</p>

                    <p>Sugerimos que a empresa ofereça incentivos para os empregados que forem vacinados e também estabeleça uma meta de vacinação.</p>

                    <p>Dispomos de equipe especializada em campanhas de vacinação em empresas, para adesão máxima dos funcionários, incluindo:</p>

                    <ul>
                        <li><p>Todo o suporte necessário, desde o planejamento até a avaliação final do programa;</p></li>
                        <li><p>Material de divulgação;</p></li>
                        <li><p>Desenvolvimento de um cronograma específico;</p></li>
                        <li><p>Fornecimento da carteira de vacinação para todos os vacinados;</p></li>
                        <li><p>Logística;</p></li>
                        <li><p>Palestras.</p></li>
                    </ul>

                    <br><br>

                    <h4><strong>Formulário de Solicitação</strong></h4><br>
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome_contato">Nome do Contato</label><span class="frm_required">*</span>
                                <input type="text" name="nome_contato" class="form-control" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="empresa">Empresa</label><span class="frm_required">*</span>
                                <input type="text" name="empresa" class="form-control" required>
                            </div>
                        </div>                        
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label><span class="frm_required">*</span>
                                <input type="text" name="cidade" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="uf">UF</label><span class="frm_required">*</span>
                                <select id="uf" name="uf" class="form-control" required>
                                    <option>Acre</option>
                                    <option>Alagoas</option>
                                    <option>Amapá</option>
                                    <option>Amazonas</option>
                                    <option>Bahia</option>
                                    <option>Ceará</option>
                                    <option>Distrito Federal</option>
                                    <option>Espírito Santo</option>
                                    <option>Goiás</option>
                                    <option>Maranhão</option>
                                    <option>Mato Grosso</option>
                                    <option>Mato Grosso do Sul</option>
                                    <option>Minas Gerais</option>
                                    <option>Pará</option>
                                    <option>Paraíba</option>
                                    <option>Paraná</option>
                                    <option>Pernambuco</option>
                                    <option>Piauí</option>
                                    <option>Rio de Janeiro</option>
                                    <option>Rio Grande do Norte</option>
                                    <option>Rio Grande do Sul</option>
                                    <option>Rondônia</option>
                                    <option>Roraima</option>
                                    <option>Santa Catarina</option>
                                    <option>São Paulo</option>
                                    <option>Sergipe</option>
                                    <option>Tocantins</option>
                                </select>
                            </div>                            
                        </div>    
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="email">E-mail</label><span class="frm_required">*</span>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone</label><span class="frm_required">*</span>
                                <input type="text" id="telefone" name="telefone" class="form-control" required="">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="vacina_interesse">Vacina de interesse</label><span class="frm_required">*</span>
                                <select id="vacina_interesse" name="vacina_interesse" class="form-control" required>
                                    <option value="bcg" selected="selected">bcg</option>
                                    <option value="hepatite b ped">hepatite b ped</option>
                                    <option value="poliomelite">poliomelite</option>
                                    <option value="tríplice bacteriana dpta">tríplice bacteriana dpta</option>
                                    <option value="haemophilus">haemophilus</option>
                                    <option value="rotavírus">rotavírus</option>
                                    <option value="sarampo caxumba rubéola">sarampo caxumba rubéola</option>
                                    <option value="varicela">varicela</option>
                                    <option value="hepatite a ped">hepatite a ped</option>
                                    <option value="meningocócica c">meningocócica c</option>
                                    <option value="pneumocócica 7 val">pneumocócica 7 val</option>
                                    <option value="dupla ad">dupla ad</option>
                                    <option value="gripe ped">gripe ped</option>
                                    <option value="pneumocócica 23">pneumocócica 23</option>
                                    <option value="hepatite a+b ad">hepatite a+b ad</option>
                                    <option value="hpv">hpv</option>
                                    <option value="hepatite b ad">hepatite b ad</option>
                                    <option value="hepatite a ad">hepatite a ad</option>
                                    <option value="hepatite a+b ped">hepatite a+b ped</option>
                                    <option value="dpta ad">dpta ad</option>
                                    <option value="imunogl anti-rh">imunogl anti-rh</option>
                                    <option value="dpta + salk">dpta + salk</option>
                                    <option value="meningocócica a+c">meningocócica a+c</option>
                                    <option value="meningocócica b+c">meningocócica b+c</option>
                                    <option value="cólera e diarréia dos viajantes">cólera e diarréia dos viajantes</option>
                                    <option value="gripe ad">gripe ad</option>
                                    <option value="febre amarela">febre amarela</option>
                                    <option value="hpv gsk">hpv gsk</option>
                                    <option value="febre tifóide">febre tifóide</option>
                                    <option value="pólio oral">pólio oral</option>
                                    <option value="tétano">tétano</option>
                                    <option value="raiva">raiva</option>
                                    <option value="rotavírus pentavalente">rotavírus pentavalente</option>
                                    <option value="pneumocócica 10 val">pneumocócica 10 val</option>
                                    <option value="pneumocócica 13 val">pneumocócica 13 val</option>
                                    <option value="tetra viral">tetra viral</option>
                                    <option value="idflu">idflu</option>
                                    <option value="meningocócica acwy">meningocócica acwy</option>
                                    <option value="timulina">timulina</option>
                                    <option value="plusvac -1">plusvac -1</option>
                                    <option value="plusvac 2">plusvac 2</option>
                                    <option value="plusvac 3">plusvac 3</option>
                                    <option value="adacel quadra-dpta+salk">adacel quadra-dpta+salk</option>
                                    <option value="candidina 1,2,3">candidina 1,2,3</option>
                                    <option value="brinco">brinco</option>
                                    <option value="herpes">herpes</option>
                                    <option value="herpes zoster">herpes zoster</option>
                                    <option value="adacel-dpta">adacel-dpta</option>
                                    <option value="meningob bexsero">meningob bexsero</option>
                                    <option value="imunoestimulador herpes">imunoestimulador herpes</option>
                                    <option value="dengue">dengue</option>
                                    <option value="nimenrix">nimenrix</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="quantidade">Quantidade</label><span class="frm_required">*</span>
                                <input type="number" min="1" max="999" name="quantidade" class="form-control" required>
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="email">Mensagem</label><span class="frm_required">*</span>
                                <textarea name="mensagem" rows="5" class="form-control" required></textarea>
                            </div>
                        </div>                    
                        <button type="submit" class="button dark">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require 'pages/footer.php'; ?>
</body>
</html>