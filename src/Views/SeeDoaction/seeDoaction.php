<!-- Importações principais-->
<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>

<!-- Container de doações recebidas -->
<div class="container-d-recebidas">
	<h2>Doações Recebidas</h2>
</div>


<!-- Filtro por datas onde posso pesquisar a data e atualizar a tabela. -->
<div class="filter-date">
	<form method="get">
		<input type="date" name="data"/>
		<button class="bg-primary">Procurar</button>
	</form>
</div>


<!-- Tabela onde é exibida as doações da Ong logada no sistema -->
<div class="tabela">

	<table class="table table-dark table-hover  table-striped">
		<thead>
			<th>Nº</th>
			<th>Doador</th>
			<th>Doação</th>
			<th>Data</th>
		</thead>

		<tbody>
			<?php $i = 1 ?>
			<?php foreach ($modelDoacoes->rows as $item) : ?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?= $item->nome ?></td>
					<td><?= $item->descricao ?> </td>
					<td><?= $item->data_doacao ?> </td>
				</tr>
			<?php endforeach ?>
		</tbody>

	</table>
</div>



<!-- FOOTER-->
<?php
include 'Views/partials/Footer/footer.php';
?>