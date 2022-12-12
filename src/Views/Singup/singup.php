<?php

include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>

<div class="area-cad">
	<div class="singIn">
		<div class="h4 title-cad ">Acesse sua conta</div>

		<form class="" action="/login/validarLogin" method="POST">
			<?php
			if (isset($_GET["erro"])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo "Acesso Inválido" ?>
					<!-- RETORNA MENSAGEM DE ERRO SE A SENHA, USUÁRIO OU TIPO DE USUÁRIO ESTIVER INCORRETA-->
				</div>
			<?php } ?>
			<div class=" input-size mb-2">
				<input type="e-mail" name="email" placeholder="Digite seu e-mail." require />
			</div>
			<div class="input-size ">
				<input type="password" name="senha" placeholder="Digite sua senha." require />
			</div>
			<div class=" input-size mt-2">
				<input type="submit" value="Entrar" class="btn btn-primary" />
			</div>
		</form>

	</div>

	<div class="singUp">
		<div class="h4 title-cad text-center">Crie sua conta</div>
		<div class="cad-option">
			<div class="option-cad">
				<a href="/singup/ong">Criar Conta ONG.</a>
			</div>
			<div class="option-cad">
				<a href="/singup/doador">Criar Conta Doador.</a>
			</div>
		</div>
	</div>
</div>



<!-- FOOTER-->
<?php

include 'Views/partials/Footer/footer.php';

?>