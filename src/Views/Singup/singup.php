<!-- Importações principais-->
<?php
include './Views/partials/Header/header.php';
include './Views/partials/Header/mobile.php';
?>

<!--Area total do card-->
<div class="area-cad">

<!-- Area para fazer o login e acessar o sistema. -->
	<div class="singIn">
		<div class="h4 title-cad ">Acesse sua conta</div>

		<form class="" action="/login/validarLogin" method="POST">
			<?php
			if (isset($_GET["erro"])) { ?>
				<div class="alert alert-danger " role="alert">
					<?php echo "Acesso Inválido" ?>
					<!-- RETORNA MENSAGEM DE ERRO SE A SENHA, USUÁRIO OU TIPO DE USUÁRIO ESTIVER INCORRETA-->
				</div>
			<?php } ?>

			<div class=" input-size mb-2">
				<input type="e-mail" name="email" placeholder="Digite seu e-mail." required />
			</div>
			<div class="input-size ">
				<input type="password" name="senha" placeholder="Digite sua senha." required />
			</div>
			<div class="radio-area  ">
				<div class="r-area">
					<input type="radio" name="tipo_usuario" value="1" required />
					<span>Ong</span>
				</div>
				<div class="r-area  ">
					<input type="radio" name="tipo_usuario" value="2" required />
					<span>Doador</span>
				</div>
			</div>
			<div class=" input-size mt-2">
				<input type="submit" value="Entrar" class="btn btn-primary" />
			</div>

		</form>

	</div> <!-- Final da area para efetuar Login -->

	<!-- Area para selecionar a criação do tipo de conta. -->
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