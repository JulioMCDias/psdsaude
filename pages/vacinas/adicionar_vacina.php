<?php
	require '../../config.php';
	require '../../classes/vacinas.class.php';
    $vacina = new Vacinas();

	if (!empty($_POST['nome_vacina'])) {
		$nome_vacina = $_POST['nome_vacina'];
		$descricao = $_POST['descricao'];
		

		$vacina->addVacina($nome_vacina, $descricao);
		header("Location: ../../vacinas.php");
	}
?>

<h3>Adicionar Vacina</h3><br>
<form method="POST" action="pages/vacinas/adicionar_vacina.php">
	<div class="form-row">
		<div class="form-group col-12">
			<label for="nome_vacina">Nome da vacina:</label>
			<input type="text" name="nome_vacina" class="form-control" required>
		</div>
		<div class="form-group col-12">
			<label for="descricao">Descrição:</label>
			<textarea name="descricao" class="form-control" required ></textarea>
		</div>
	</div>	
	<input class="btn btn-primary" type="submit" value="Adicionar">
	<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
</form>