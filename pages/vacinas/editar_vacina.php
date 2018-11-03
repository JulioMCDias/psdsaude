<?php
	require '../../config.php';
	require '../../classes/vacinas.class.php';
	$vacina = new Vacinas();

	if (!empty($_GET['id_vacina'])) {
		
		$id_vacina = $_GET['id_vacina'];
		$infoVacina = $vacina->getInfovacina($id_vacina);	

	} else {
		header("Location: ../../vacina.php");
		exit;
	}	
?>

<h3>Editar Vacina</h3><br>
<form method="POST" action="pages/vacinas/editar_vacina_submit.php">
	<input type="hidden" name="id_vacina" value="<?php echo $infoVacina['id_vacina'] ?>">
	<div class="form-row">
		<div class="form-group col-12">
			<label for="nome_vacina">Nome da vacina:</label>
			<input type="text" name="nome_vacina" class="form-control" value="<?php echo $infoVacina['nome_vacina'] ?>" required>
		</div>
		<div class="form-group col-12">
			<label for="descricao">Descrição:</label>
			<textarea name="descricao" class="form-control" required><?php echo $infoVacina['descricao'] ?></textarea>
		</div>
	</div>	
	<input class="btn btn-primary" type="submit" value="Salvar">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</form>