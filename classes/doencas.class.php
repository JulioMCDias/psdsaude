<?php
class Doenca{
			
	public function getAll(){
		
		global $pdo;    				
		$sql = "SELECT * FROM doencas";
		$sql = $pdo->query($sql);

		if ($sql->rowCount() > 0) {
			
			return $sql->fetchAll();

		} else {
			return array();
		}
	}

	public function getInfo($id_doenca){
		
		global $pdo;
		$sql = "SELECT * FROM doencas WHERE id_doenca = :id_doenca";
		$sql = $pdo->prepare($sql);
		$sql -> bindValue(':id_doenca', $id_doenca);
		$sql -> execute();

		if ($sql->rowCount() > 0) {
			
			return $sql->fetch();

		} else {
			return array();
		}
	}
}

?>