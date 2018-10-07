<?php 
class Domiciliar{
     	    
        public function addVacinaDomiciliar($nome_responsavel, $pessoa_vacinada, $vacinas_solicitadas, $email, $data, $telefone, $endereco, $cidade, $cep){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO vacina_domiciliar SET nome_responsavel = :nome_responsavel, pessoa_vacinada = :pessoa_vacinada, vacinas_solicitadas = :vacinas_solicitadas, email = :email, data = :data, telefone = :telefone, endereco = :endereco, cidade = :cidade, cep = :cep");
        $sql->bindValue(":nome_responsavel", $nome_responsavel);
        $sql->bindValue(":pessoa_vacinada", $pessoa_vacinada);        
        $sql->bindValue(":vacinas_solicitadas", $vacinas_solicitadas);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":data", $data);        
        $sql->bindValue(":telefone", $telefone);
        $sql->bindValue(":endereco", $endereco);
        $sql->bindValue(":cidade", $cidade);
        $sql->bindValue(":cep", $cep);
        $sql->execute();    
    }
} 
?>