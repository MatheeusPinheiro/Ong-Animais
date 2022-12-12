<?php

include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>



<div class="container-fluid bg-light p-5">
	<div class="form-cad-ong ">
		<div class="h3">Cadastro de Doadores</div>
		<form method="POST" action="/singup/doador/save" nctype="multipart/form-data">
			<div class="mb-2 d-flex justify-content-center ">
				<img src="../../assets/images/patas.png" width="100px" />
			</div>
			<div>
				<label>CPF *</label>
				<input class="form-control" type="text" name="cpf" required />
			</div>
			<div>
				<label>Nome *</label>
				<input type="text" class="form-control" name="nome" required />
			</div>
			<div>
				<label>E-mail *</label>
				<input type="email" class="form-control" name="email" required />
			</div>
			<div>
				<label>Senha *</label>
				<input type="Password" class="form-control" name="senha" required />
			</div>
			<div>
				<label>Repeti Senha *</label>
				<input type="Password" class="form-control" name="confirma_senha" required />
			</div>
			<div class="mt-2 d-flex justify-content-end">
				<input class="btn btn-primary btn-size "  type="submit" value="Cadastrar" />
			</div>
		</form>
	</div>
</div>


<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>