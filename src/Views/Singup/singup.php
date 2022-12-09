<?php

include './Views/partials/Header/header.php';

?>

<div class="cad-container mt-2">
	<div class="h2 text-center mt-3">Boas-vindas ao PetHelp</div>
</div>


<div class="area-cad">
	<div class="singIn">
		<div class="h4 title-cad ">Acesse sua conta</div>

		<form class="" action="" method="POST">
			<div class=" input-size mb-2">
				<input type="e-mail" name="email" placeholder="Digite seu e-mail." require />
			</div>
			<div class="input-size ">
				<input type="password" name="email" placeholder="Digite sua senha." require />
			</div>
			<div class=" input-size">
				<input type="submit" value="Entrar" class="btn btn-primary btn-size" />
			</div>
		</form>

	</div>

	<div class="singUp">
		<div class="h4 title-cad text-center">Crie sua conta</div>
		<div class="cad-option">
			<div class="option-cad">
				<a href="#">Criar Conta ONG.</a>
			</div>
			<div class="option-cad">
				<a href="#">Criar Conta Doador.</a>
			</div>
		</div>
	</div>
</div>



<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>