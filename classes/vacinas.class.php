<?php 
class Vacinas{
    
    public function getAllVacinas(){
    	global $pdo;
		$sql = "SELECT * FROM vacinas";
		$sql = $pdo->query($sql);

		if ($sql->rowCount() > 0) {
			
			return $sql->fetchAll();

		} else {
			return array();
		}
	}

	public function addVacina($nome_vacina, $descricao){
		global $pdo;
		if ($this->existeVacina($nome_vacina) == false) {
			
			$sql = $pdo->prepare("INSERT INTO vacinas SET nome_vacina = :nome_vacina, descricao = :descricao");		
			$sql -> bindValue(':nome_vacina', $nome_vacina);
			$sql -> bindValue(':descricao', $descricao);						
			$sql -> execute();

			return true;

		} else {
			return false;
		}
	}

	public function editarVacina($id_vacina, $nome_vacina, $descricao){
		global $pdo;
		$sql = $pdo->prepare("UPDATE vacinas SET nome_vacina = :nome_vacina, descricao = :descricao WHERE id_vacina = :id_vacina");		
		$sql -> bindValue(':id_vacina', $id_vacina);
		$sql -> bindValue(':nome_vacina', $nome_vacina);
		$sql -> bindValue(':descricao', $descricao);				
		$sql -> execute();

	}
	public function excluirVacina($id_vacina){
		global $pdo;
		$sql = $pdo->prepare("DELETE FROM vacinas WHERE id_vacina = :id_vacina");
		$sql -> bindValue(':id_vacina', $id_vacina);
		$sql -> execute();
	} 

	private function existeVacina($nome_vacina){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM vacinas WHERE nome_vacina = :nome_vacina");
		$sql -> bindValue(':nome_vacina', $nome_vacina);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getInfoVacina($id_vacina){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM vacinas WHERE id_vacina = :id_vacina");		
		$sql -> bindValue(':id_vacina', $id_vacina);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			
			return $sql->fetch();

		} else {
			return array();
		}
	}

}
?>