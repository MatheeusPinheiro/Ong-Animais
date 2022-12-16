<?php

include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>


<div class="container-d-recebidas">

	<h2>Doações Recebidas <?php echo $_SESSION['email'] ?></h2>
</div>


<div class="filter-date">
	<form method="get">
		<input type="date" name="data"/>
		<button>Procurar</button>
	</form>
</div>
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