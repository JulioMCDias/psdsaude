<?php 
class Empresarial{
     	    
        public function addVacinaEmpresarial($nome_contato, $empresa, $cidade, $uf, $email, $telefone, $vacina_interesse, $quantidade, $mensagem){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO vacina_empresarial SET nome_contato = :nome_contato, empresa = :empresa, cidade = :cidade, uf = :uf, email = :email, telefone = :telefone, vacina_interesse = :vacina_interesse, quantidade = :quantidade, mensagem = :mensagem");
        $sql->bindValue(":nome_contato", $nome_contato);
        $sql->bindValue(":empresa", $empresa);        
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":uf", $uf);
        $sql->bindValue(":email", $email);        
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":vacina_interesse", $vacina_interesse);
        $sql->bindValue(":quantidade", $quantidade);
        $sql->bindValue(":mensagem", $mensagem);
        $sql->execute();    
    }
} 
?>