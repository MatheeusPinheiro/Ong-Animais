<!-- Importações principais-->
<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
include './Components/modal.php';
?>


<div class="container-fluid d-flex justify-content-center p-2 ">
	<h3 class="p-2">Minhas doações</h3>
</div>


<div class="comprovante-grid">
	<?php foreach($modelDoacoes->rows as $item) : ?>	
	<div class="quadrado">
		<div class="area-quadrado">
			<div class="quadrado-title"><div class="h4 p-t2 pb-2">Comprovante</div></div>
			<div class="ong-select"> <div class="h5 p-t2 pb-2"><?= $item->ong_nome ?> </div> </div>
			<div class="quadrado-desc">
				<p>
					<?= $item->descricao ?>
				</p>
			</div>
			<div class="acaoes-button">
				<a href="#" onclick="window.print()" class="btn btn-primary">Imprimir</a>
			</div>
		</div>
	</div> 
	<?php endforeach  ?>

</div>







<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

if (isset($_GET['message'])){
    include 'Views/Feedback/feedbackDoacao.php';
}
?>