<?php 
class Pacientes{
    
    public function getAllPacientes(){
    	global $pdo;
		$sql = "SELECT * FROM pacientes";
		$sql = $pdo->query($sql);

		if ($sql->rowCount() > 0) {
			
			return $sql->fetchAll();

		} else {
			return array();
		}
	}

	public function addPaciente($nome_paciente, $idade, $num_carteira, $data_nasc){
		global $pdo;
		if ($this->existeCarteira($num_carteira) == false) {
			
			$sql = $pdo->prepare("INSERT INTO pacientes SET nome_paciente = :nome_paciente, idade = :idade, num_carteira = :num_carteira, data_nasc = :data_nasc");		
			$sql -> bindValue(':nome_paciente', $nome_paciente);
			$sql -> bindValue(':idade', $idade);			
			$sql -> bindValue(':num_carteira', $num_carteira);
			$sql -> bindValue(':data_nasc', $data_nasc);
			$sql -> execute();

			return true;

		} else {
			return false;
		}
	}

	public function editarPaciente($id_paciente, $nome_paciente, $idade, $num_carteira, $data_nasc){
		global $pdo;
		$sql = $pdo->prepare("UPDATE pacientes SET nome_paciente = :nome_paciente, idade = :idade, num_carteira = :num_carteira, data_nasc = :data_nasc WHERE id_paciente = :id_paciente");		
		$sql -> bindValue(':id_paciente', $id_paciente);
		$sql -> bindValue(':nome_paciente', $nome_paciente);
		$sql -> bindValue(':idade', $idade);		
		$sql -> bindValue(':num_carteira', $num_carteira);		
		$sql -> bindValue(':data_nasc', $data_nasc);
		$sql -> execute();

	}
	public function excluirPaciente($id_paciente){
		global $pdo;
		$sql = $pdo->prepare("DELETE FROM pacientes WHERE id_paciente = :id_paciente");
		$sql -> bindValue(':id_paciente', $id_paciente);
		$sql -> execute();
	} 

	private function existeCarteira($num_carteira){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM pacientes WHERE num_carteira = :num_carteira");
		$sql -> bindValue(':num_carteira', $num_carteira);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function getInfoPaciente($id_paciente){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM pacientes WHERE id_paciente = :id_paciente");		
		$sql -> bindValue(':id_paciente', $id_paciente);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			
			return $sql->fetch();

		} else {
			return array();
		}
	}

	public function getInfoVacina($num_carteira){
		global $pdo;
		$sql = $pdo->prepare("SELECT * FROM pacientes WHERE num_carteira = :num_carteira");		
		$sql -> bindValue(':num_carteira', $num_carteira);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			
			return $sql->fetch();

		} else {
			return array();
		}
	}

}
?>