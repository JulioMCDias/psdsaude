<?php 
class Usuarios{
   
    public function login($email, $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['login'] = $dado['id'];            
            return true;
        } else {
            return false;
        }
    }

    public function usuarioLogado(){
    	global $pdo;
    	
    	if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
		
		$id = $_SESSION['login'];
		$sql = $pdo->prepare("SELECT nome FROM usuarios WHERE id = :id");
		$sql -> bindValue(":id", $id);
		$sql -> execute();

			if ($sql->rowCount() > 0) {
				$info = $sql->fetch();
			}
			return $info;
    	}
    }

    public function verificarAcesso(){
        global $pdo;
        
        if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
        
        $id = $_SESSION['login'];
        $sql = $pdo->prepare("SELECT tipo FROM usuarios WHERE id = :id");
        $sql -> bindValue(":id", $id);
        $sql -> execute();

            if ($sql->rowCount() > 0) {
                $info = $sql->fetch();
            }
            return $info;
        }
    }
}
?>