<?php 
class msgContato{
     	    
        public function enviarMsg($nome, $email, $assunto, $mensagem){
        global $pdo;

        $sql = $pdo->prepare("INSERT INTO msg_contato SET nome = :nome, email = :email, assunto = :assunto, mensagem = :mensagem");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":assunto", $assunto);
        $sql->bindValue(":mensagem", $mensagem);
        $sql->execute();
    }
} 
?>